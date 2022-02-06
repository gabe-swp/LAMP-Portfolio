<?php 
	session_start();
	include_once("check_logged_in.php");
	include_once("SQL_connect.php");
	include_once("validate_token.php");

	if(isset($_POST['new_password'])){
		$changed_password_unsanitized = $_POST['new_password'];
		$changed_password = filter_var($changed_password_unsanitized,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$username = $_SESSION["username"];
		$change_password_sql = "UPDATE user_database SET password='$changed_password' WHERE username = '$username'";
		mysqli_query($conn,$change_password_sql);
		header("Location: ../dashboard.php");
	}else{
		echo "Password Not provided";
	}

?>

//' WHERE username = 'User_0';'#';