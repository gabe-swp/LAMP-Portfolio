<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="php_stuff/RegisterUser.php" method = "POST">
      <label for="uname">Username:</label><br>
      <input type="text" id="username_field" name="entered_username"><br><br>
      <label for="pword">Password:</label><br>
      <input type="text" id="first_password_field" name="first_entered_password"><br><br>
      <label for="pword">Enter Again:</label><br>
      <input type="text" id="second_password_field" name="second_entered_password"><br><br>
      <input type="submit" name = "submit" id = "submit_button" value="Register User" >
    </form>
    <button class = "corner_button" onclick="window.location.href='LoginPage.php'">Go to Login</button>
  </body>
</html>