<!DOCTYPE html>
<?php 
  include_once("php_stuff/check_logged_in.php");
  include_once("php_stuff/generate_csrf_token.php");
  session_start();
  $_SESSION['csrf_token'] = generate_token();
  echo "CSRF Token: ".$_SESSION['csrf_token'];
  ?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
    <title>EnterSite</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
     <form action="php_stuff/change_user_password.php" method = "POST">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Enter a New Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="new_password">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <input type="submit" class= "btn btn-primary">
      </div>
    </form>

  </body>
</html>