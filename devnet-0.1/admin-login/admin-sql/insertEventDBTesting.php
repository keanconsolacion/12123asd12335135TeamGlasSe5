<?php
include_once '..\..\process\connection.php';

  $date=mysqli_real_escape_string($conn,$_POST['date']);
  $date=date('Y-m-d',strtotime($date));
  $eventTitle=mysqli_real_escape_string($conn,$_POST['eventTitle']);
  $eventCreator=mysqli_real_escape_string($conn,$_POST['eventCreator']);

  $sqlStmnt = "INSERT INTO `event_list`(`eventtitle`, `eventcreator`, `date`)
  VALUES ('$eventTitle','$eventCreator','$date')";

  $request =mysqli_query($conn,$sqlStmnt);



  $dateToday = date('Y-m-d');
  $sqlStmnt = "SELECT * FROM `event_list` WHERE `date` = '$dateToday";

  $resultSet = mysqli_query($conn,$sqlStmnt);

  if (mysqli_num_rows($resultSet) > 0) {
    echo 'greater than zero';
    while($row = mysqli_fetch_assoc($resultSet)) {
       echo "Name: " . $row["date"]. "<br>";
    }
  }

 ?>
