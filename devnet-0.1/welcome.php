<?php

include 'connection.php';
include 'authenticate_token.php';  // Check user token

// Check user login or not
if(!isset($_SESSION['username'])){
  echo "<script type='text/javascript'>alert('Token Error: Incorrect Login');</script>";
  header('Location: index.php');
}

// logout
if(isset($_POST['logout'])){
 session_destroy();
 header('Location: index.php');
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>devnet</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- PT SANS CDN -->
    <script src="https://kit.fontawesome.com/e1bff3e01e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/ihub_index.css">
  </head>
  <body>


<div class="text-center mt-5">
  <h1>welcome.php inprogress</h1>
  <h2><?php echo "debug: tokenID - ".$_SESSION['token'] ?></h2>
  <form method='post' action="">
     <input type="submit" value="Logout" name="logout">
    </form>
</div>



    <!-- Optional JavaScript -->

    <!--===============================================================================================-->
    	<script src="js/login_jquery.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
