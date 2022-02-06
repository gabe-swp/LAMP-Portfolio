<!DOCTYPE html>
<?php include_once("php_stuff/check_logged_in.php");
  ?>
<html lang  ="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
	
    <div class="container">
      <div class="row align-items-center">
        <div class="col align-self-center justify-content-center">
          <button type="button" class="btn btn-primary" onclick="window.location.href='ChangePassword.php'" >Change Password</button>
        </div>
        <div class="col align-self-center justify-content-center">
          <button type="button" class="btn btn-secondary"
          onclick="window.location.href='Forum.php'">Forum</button>
        </div>
        <div class="col align-self-center justify-content-center">
          <button type="button" class="btn btn-success">Admin Page</button>
        </div>
      </div>
      <h1>Welcome User: <?php echo $_SESSION['username']; ?></h1>
  </div>
</div>
  </body>
</html>