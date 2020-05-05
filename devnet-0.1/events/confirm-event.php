<?php

include_once 'process/connection.php';
include_once 'process/gencode.php';
// registration variables, with mysqli to prevent SQL Attack

      $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
      $middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
      $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      // $date = mysqli_real_escape_string($conn,$_POST['date']);
      // // //we need to cast date variable because MYSQL Date format is YYY-MMM-DDD
      // $date=date('Y-m-d',strtotime($date));
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
    <link rel="stylesheet" type="text/css" href="css/ihub_index.css">

    <script>
    $(function () {
     $(".hiddenform").hide();
   });
    </script>
  </head>
  <body>

    <div class="code-border" id="logindiv">
      <div class="inside-border">
        <div class="login-text p-5 text-center inside-div">
              <h1 class="header-code">WELCOME!</h1>
                  <h6 class="mt-3"><?php echo $firstname.' '.$middlename.' '.$lastname;?></h6>
                  <!-- <h6 class="mt-3"><?php echo $date;?></h6>
                  <h6 class="mt-3"><?php echo $purpose;?></h6>
                  <h6 class="mt-3"><?php echo $email;?></h6> -->
            </div>
      </div>
      <div class="inside-border">
        <div class="login-text p-5  text-center inside-div">
              <h2 class="header-code">YOUR CODE</h2>
              <h1 id="code"><?php echo $generatekey ?></h1>
              <h4>Valid for 1 transaction only</h4>
            </div>
      </div>
      <div class="info p-5 text-center info-note">
          Please save your CODE number and present it at the front desk
      </div>

      <form class="text-center form-code" action="process.php" method="post">
        <div class="hiddenform" id = "hide">
          <input type="hidden" name="firstname" value="<?php echo "$firstname" ?>">
          <input type="hidden" name="middlename" value="<?php echo "$middlename" ?>">
          <input type="hidden" name="lastname" value="<?php echo "$lastname" ?>">
          <input type="hidden" name="email" value="<?php echo "$email" ?>">
          <input type="hidden" name="date" value="<?php echo "$date" ?>">
          <input type="hidden" name="email" value="<?php echo "$email" ?>">
          <input type="hidden" name="purpose" value="<?php echo "$purpose" ?>">
          <input type="hidden" name="idgiven" value="<?php echo "$idgiven" ?>">
          <input type="hidden" name="contactnum" value="<?php echo "$contactnum" ?>">
          <input type="hidden" name="generatekey" value="<?php echo "$generatekey" ?>">
        </div>
          <a class="btn btn-outline-light btn-edit" href="javascript:history.go(-1)">Edit</a>

          <input class="btn btn-outline-light" type="submit" id="confirm" name="confirm" value="Confirm">
      </form>
      <?php



       ?>

    </div>





    <!-- Optional JavaScript -->

    <!--===============================================================================================-->
    	<script src="js/login_jquery.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
