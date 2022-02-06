<?php 
	$servername = 'localhost';
	$username = 'basic_user';
	$password = 'password';
	$db = 'LAMP_DB';
	$conn = mysqli_connect($servername,$username,$password);
	if (!$conn){

		die("Connection Failed: ". mysqli_connect_error());
		echo "<br>";

	}else{
		if (!mysqli_select_db($conn, $db)) {
    		die("Uh oh, couldn't select database $db");
		}
	}

?>