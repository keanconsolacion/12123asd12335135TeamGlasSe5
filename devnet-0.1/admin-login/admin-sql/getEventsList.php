<?php
include_once "..\..\process\connection.php";

  $dateToday = date('Y-m-d');
  $sqlStmnt = "SELECT * FROM `event_list` WHERE `date` = '$dateToday";

  $resultSet = mysqli_query($conn,$sqlStmnt);

  echo mysqli_fetch_assoc($resultSet)

 ?>
