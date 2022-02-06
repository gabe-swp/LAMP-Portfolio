<?php
	include_once("SQL_connect.php");
	$username_unsanitized  = $_POST["entered_username"];
	$username = filter_var($username_unsanitized, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$password_unsanitized = $_POST["entered_password"];
	$password = filter_var($password_unsanitized, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	if (mysqli_query($conn,"SELECT * FROM user_database WHERE username='$username' AND password='$password'")){
		$result = mysqli_query($conn,"SELECT * FROM user_database WHERE username='$username' AND password='$password'");
		if (mysqli_num_rows($result) >= 1){
			session_start();
			$_SESSION['id'] = mysqli_query($conn,"SELECT id FROM user_database WHERE username='$username'");
			$_SESSION["username"] = $username;
			header("Location: ../dashboard.php");

		}else{
			echo "Something was wrong";
		}
	}else{
		echo "didnae ". mysqli_error($conn);
	}
?>