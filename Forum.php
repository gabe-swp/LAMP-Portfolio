<?php include_once("php_stuff/check_logged_in.php");
  session_start();
  include_once('SQL_connect.php');
  include_once("php_stuff/generate_csrf_token.php");
  
  $_SESSION['csrf_token'] = generate_token();
  
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
      <?php
        $username = $_SESSION['username'];
        //$sql = "SELECT * FROM comments WHERE commenter = '$username'";
        $get_all_comments_sql = "SELECT * FROM comments";
        $result = mysqli_query($conn,$get_all_comments_sql);
        if (mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
           $comment_id = $row[comment_id];
            echo "
            <div class= 'container'>
              <div class='row justify-content-center border border-4'>
              <form action='php_stuff/delete_comment.php' method='POST'>
               <div class='col-4'>
                <span>$row[comment_text]</span>
                </div>
                <div class='col-4'>";
                 if($row[commenter]== $username){
                    echo 'From you';
                  }else{
                    echo 'From: '.$row[commenter];
                  }
                  echo " 
                </div>
                <div class='col-4'>";
                   if($row[commenter]== $username){
                    echo '<input type="submit" class="btn btn-secondary" value="Delete!">';
                    echo '<input type="hidden" name="csrf_token" value="'.$_SESSION['csrf_token'].'">';
                    echo '<input type="hidden" name="comment_id" value="'.$comment_id.'">';
                  }
                echo "
                </div>
                </form>
                ";
                echo "
              </div>
            </div>
            <br>
            <br>
            ";
            }
          
        }
       ?>
       <form action = "php_stuff/add_comment.php" method = "POST">
        <div class="mb-3">
          <label for="InputComment" class="form-label">Enter a comment:</label>
          <input type="text" class="form-control" id="comment_text" name="comment_text">
          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
          <button type = "submit" class = "btn btn-dark">Add Comment</button>
        </div>


       </form>
    </div>
  <button onclick = "window.location.href='dashboard.php'">Go Back to dashboard</button>
  <?php 

  ?>
  </body>

</html>

