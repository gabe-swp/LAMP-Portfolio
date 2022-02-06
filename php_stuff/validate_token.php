<?php 

session_start();
include_once("generate_csrf_token.php");

	if (!isset($_SESSION['csrf_token']) or !isset($_POST['csrf_token'])){

		echo "METHOD NOT ALLOWED";
		echo '<br>';
		echo "No Session CSRF Token";
		if (!isset($_POST['csrf_token'])){
			
			echo "No POSTED CSRF Token";

		}
		if (!isset($_SESSION['csrf_token'])){

			echo "No session CSRF TOKEN";
		}
		die();


	} 
	if ($_SESSION['csrf_token']==$_POST['csrf_token']){
		echo '<br>';
		echo $_SESSION['csrf_token'];

		echo '<br>';
		echo $_POST['csrf_token'];
		echo '<br>';
		echo "TOken is valid!";
		generate_token();
		
	}else{
		echo "METHOD NOT ALLOWED";
		echo '<br>';
		echo "The tokens did not match.";
		echo '<br>';
		echo $_SESSION['csrf_token'];
		echo '<br>';
		echo $_POST['csrf_token'];
		echo '<br>';
		die();
	}

?>