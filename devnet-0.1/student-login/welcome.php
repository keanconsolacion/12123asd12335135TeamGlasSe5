<?php

// include '../process/connection.php';
// include '../process/authenticate_token.php';  // Check user token
//
// if(!isset($_SESSION['username'])){
//   echo "<script type='text/javascript'>alert('Token Error: Incorrect Login');</script>";
//   header('Location: ../index.php?authentication=invalid');
// }
//
// // logout
// if(isset($_POST['logout'])){
//  session_destroy();
//  header('Location: ../index.php');
// }


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
    <link rel="stylesheet" type="text/css" href="student-login-css/welcome.css">
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><h4><b>EVE - GAMECHANGER LOGIN</b></h4></a>
    </nav>

    <div class="main-div">
      <h1></h1>
      <!--<h2><?php// echo @"debug: tokenID - ".$_SESSION['token'] ?></h2>-->

      <div class="display-card float-left" style="margin-top: 20%; margin-left: 10%">
          <h3><b>What would you like <br>to do?</b></h3>
      </div>

      <div class="display-card float right" style="margin-top: 17.5%; margin-bottom: 15%">
          <a href="gamechangerVisitSchoolRegister.php" class="btn btn-info button-shadow" style="width: 250px; height: 50px; text-align:center;">Visit School</a><br><br>
          <a href="../events/event-landing.php" class="btn btn-info button-shadow" style="width: 250px; height: 50px; text-align:center;">Events</a>
          <br><br><br><br>

   </div>
 </div> 





    <?php
    //MODAL BLOCK

    require_once '../view/modal/logout-modal.php';
    require_once '../process/logout.php';

    //FOOTER BLOCK
    require_once '../view/footer-main.php';

    ?>
