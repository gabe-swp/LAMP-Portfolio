<?php
 include_once("SQL_connect.php");

 if (isset($_POST["submit"])){
 	$entered_username = $_POST['entered_username'];
 	$first_password = $_POST['first_entered_password'];
 	$second_password = $_POST['second_entered_password'];
 	if ($first_password != $second_password){
 		
 		header('Location: ../RegisterPage.php');
 		echo "Passwords did not match";
 	}else{
        if (mysqli_query($conn,'SELECT id FROM user_database ORDER BY id DESC LIMIT 1;')){
            $id_value = mysqli_query($conn,'SELECT id FROM user_database ORDER BY id DESC LIMIT 1;');
            $id_value += 1;
            echo "ID Value found and incremented <br>";
            $add_user_sql = "INSERT INTO user_database(id,username,password) VALUES ($id_value,'$entered_username','$second_password')";
            //prepared_query($conn,$add_user_sql,[$id_value,$entered_username,$second_password]);
            if (mysqli_query($conn,$add_user_sql)){
                echo "Query Success";
                header("Location: ../LoginPage.php");
            }else{
                echo "Query Failed" . mysqli_error($conn);
                echo "<br>";
                header("Location: ../RegisterPage.php");
            }
        }else{

            echo "ID Query Failed" . mysqli_error($conn);
            echo "<br>";
            header("Location: ../RegisterPage.php");
        }
 	}
 }
?>