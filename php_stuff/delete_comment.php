<?php 
	session_start();
	include_once("check_logged_in.php");
	include_once("validate_token.php");
	include_once('SQL_connect.php');

	$comment_id = $_POST['comment_id'];

	$delete_comment_sql = 'DELETE FROM comments WHERE comment_id = '.$comment_id;
	if(mysqli_query($conn,$delete_comment_sql)){

		header("Location: ../Forum.php");


	}else{

		echo "didnt work";
	}
?>
