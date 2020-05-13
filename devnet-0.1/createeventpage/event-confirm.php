<?php

include_once 'process/connection.php';
include_once 'process/gencode.php';
// registration variables, with mysqli to prevent SQL Attack

      $eventTitle = mysqli_real_escape_string($conn,$_POST['eventTitle']);
      $eventCreator = mysqli_real_escape_string($conn,$_POST['eventCreator']);
      $eventCategory = mysqli_real_escape_string($conn,$_POST['eventCategory']);
      $eventDesc = mysqli_real_escape_string($conn,$_POST['eventDesc']);
      $venue = mysqli_real_escape_string($conn,$_POST['venue']);
      $date = mysqli_real_escape_string($conn,$_POST['date']);
      // //we need to cast date variable because MYSQL Date format is YYY-MMM-DDD
      $date=date('Y-m-d',strtotime($date));
      $startTime = mysqli_real_escape_string($conn,$_POST['startTime']);
      $endTime = mysqli_real_escape_string($conn,$_POST['endTime']);
      $attendees = mysqli_real_escape_string($conn,$_POST['attendees']);
      $generatekey = event_keygen(6,2);


      // //we need to cast date variable because MYSQL Date format is YYY-MMM-DDD

      $sqlStmnt = "INSERT INTO `event_list` (`eventtitle`, `eventcreator`, `eventcategory`, `eventaudience`, `date`, `startat`,  `endat`, `venue`, `eventcode`)
                    VALUES ('$eventTitle','$eventCreator','$eventCategory','$eventDesc', '$venue', '$date', '$startTime', '$endTime', '$attendees', $generatekey)";

        $request =mysqli_query($conn,$sqlStmnt);



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
    <!-- Optional JavaScript -->

    <!--===============================================================================================-->
    	<script src="js/login_jquery.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
