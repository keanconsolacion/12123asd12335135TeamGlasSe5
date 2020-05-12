<?php

include_once '../process/connection.php';
include_once '../process/gencode.php';
// registration variables, with mysqli to prevent SQL Attack

      $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
      $middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
      $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $date = mysqli_real_escape_string($conn,$_POST['date']);
      // //we need to cast date variable because MYSQL Date format is YYY-MMM-DDD
      $date=date('Y-m-d',strtotime($date));
      $idgiven = mysqli_real_escape_string($conn,$_POST['idgiven']);
      $contactnum = mysqli_real_escape_string($conn,$_POST['contactnum']);
      $generatekey = guest_keygen(6,2);




      // //we need to cast date variable because MYSQL Date format is YYY-MMM-DDD




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
    <link rel="stylesheet" type="text/css" href="../css/main.css">
  </head>
  <body>
    <div class="container" style="max-width: 1200px; max-height: 4000px; background-color: gray; padding: 20px;">
      <h1>TICKET OVERVIEW</h1>
      <div class="inside-container" style="width: 1150px; max-height: 3000px; background-color: white; padding: 20px;">
        <div class="left" style="width: 50%; max-height: 1500px; background-color: lightblue; padding: 20px; float: left; margin-bottom: 10px;">
          <p> <b> Ticket No. ----- </b></p>
          <i class="fas fa-user fa-5x"><?php echo $firstname.' '.$middlename.' '.$lastname;?></i>
          <br><br>
          <i class="fas fa-pen-square fa-5x"><?php echo $date;?></i>
          <br><br>
          <i class="fas fa-envelope-square fa-5x"><?php echo $email;?></i>
          <br><br>
        </div>

        <div class="right" style="width: 50%; max-height: 1500px; background-color: pink; padding: 20px; float: right; margin-bottom: 10px;">
          <center><h1> Event Title </h1></center>

          <i class="fas fa-ticket-alt fa-3x"><?php echo $firstname.' '.$middlename.' '.$lastname;?></i>
          <br><br>
          <i class="far fa-calendar-alt fa-3x"></i>
          <br><br>
          <i class="fas fa-clock fa-3x"></i>
          <br><br>
          <i class="fas fa-map-marker-alt fa-3x"></i>
          <br><br>
        </div>
        <button type="button" class="btn btn-primary" style="margin-left: 350px;">CONFIRM</button>
        <button type="button" class="btn btn-secondary float-right">CANCEL</button>

      </div>
    </div>



    <!-- Optional JavaScript -->

    <!--===============================================================================================-->
    	<script src="js/login_jquery.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
