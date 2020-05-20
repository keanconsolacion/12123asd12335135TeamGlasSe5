<?php
include_once '..\..\process\connection.php';
include_once '..\..\process\gencode.php';


  $eventTitle=mysqli_real_escape_string($conn,$_POST['eventTitle']);
  $eventCreator=mysqli_real_escape_string($conn,$_POST['eventCreator']);
  $eventCategory=mysqli_real_escape_string($conn,$_POST['eventCategory']);
  $eventAudience=mysqli_real_escape_string($conn,$_POST['eventAudience']);
  $date=mysqli_real_escape_string($conn,$_POST['date']);
  $date=date('Y-m-d',strtotime($date));
  $startat=mysqli_real_escape_string($conn,$_POST['startAt']);
  $endAt=mysqli_real_escape_string($conn,$_POST['endAt']);
  $venue=mysqli_real_escape_string($conn,$_POST['venue']);
  $currentTime = date("h:i:s"); //time
  $currentDate = date("Y-m-d"); //date

  $sqlStmnt = "INSERT INTO `event_list`(`eventTitle`, `eventCreator`, `eventcategory`, `eventaudience`, `date`, `startAt`, `endat`, `venue`, `dateCreated`, `timeCreated`)
                                VALUES ('$eventTitle','$eventCreator','$eventCategory','$eventAudience','$date','$startat','$endAt','$venue','$currentDate','$currentTime')";

  $request =mysqli_query($conn,$sqlStmnt);

 ?>
