<?php
include_once '..\..\process\connection.php';

  $date=mysqli_real_escape_string($conn,$_POST['date']);
  $date=date('Y-m-d',strtotime($date));
  $eventTitle=mysqli_real_escape_string($conn,$_POST['eventTitle']);
  $eventCreator=mysqli_real_escape_string($conn,$_POST['eventCreator']);

  $sqlStmnt = "INSERT INTO `event_list`(`eventtitle`, `eventcreator`, `date`)
  VALUES ('$eventTitle','$eventCreator','$date')";

  $request =mysqli_query($conn,$sqlStmnt);

 ?>
