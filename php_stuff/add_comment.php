<?php 

	include_once("check_logged_in.php");
	include_once("validate_token.php");
	session_start();
	include_once('SQL_connect.php');
	$commenter = $_SESSION['username'];
	$comment_text_unsanitized = $_POST['comment_text'];
	$comment_text = filter_var($comment_text_unsanitized,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$comment_id_result = mysqli_query($conn,'SELECT comment_id FROM comments ORDER BY comment_id DESC LIMIT 1;');
	$comment_id = 0;
	if (mysqli_num_rows($comment_id_result) > 0) {
		while($rowData = mysqli_fetch_array($comment_id_result)){
			$comment_id = $rowData["comment_id"];
		}
	}
	$comment_id +=1;
	$add_comment_sql = "INSERT INTO comments(comment_id,comment_text,commenter) VALUES($comment_id,'$comment_text','$commenter')";
	if(mysqli_query($conn,$add_comment_sql)){
		
		header("Location: ../Forum.php");
		//echo " add comment" . mysqli_error($conn);
	}else{
		echo "didnt add comment" . mysqli_error($conn);
	}
?>
