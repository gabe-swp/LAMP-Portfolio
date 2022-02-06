<?php 
	session_start();
	include_once('SQL_connect.php');

  if(isset($_SESSION["username"])){
    pass;
     

  }else{

    header('Location: /LoginPage.php');
  }

?>
