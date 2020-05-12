<?php
include_once("..\..\process\connection.php");

function countVisitors(){
  $num_visitors = 0;
  $sqlStatement = "SELECT * FROM `guest_register`";
  $result200 = mysqli_query(getConnection(),$sqlStatement);
  while(mysqli_fetch_array($result200)){
    $num_visitors += 1;
    return 4;
  }
  return $num_visitors;
}

?>
