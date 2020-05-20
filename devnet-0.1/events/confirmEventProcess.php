<<?php
include_once '..\process\connection.php';

  $date=mysqli_real_escape_string($conn,$_POST['dateOfVisit']);
  $date=date('Y-m-d',strtotime($date));
  $idType=mysqli_real_escape_string($conn,$_POST['idType']);
  $contactNumber = mysqli_real_escape_string($conn,$_POST['contactNumber']);

  $sqlStmnt = "INSERT INTO `user_school_visit`(`dateOfVisit`, `idType`,)
                VALUES ('$date','$idType')";


  if($date!="" && $purpose!="" && $idType!=""){
    $resultSet = mysqli_query($conn,$sqlStmnt);
    header("Location: ticket.php");
  }else{
    echo "fields are null";
    header("Location: events-registration.php");
  }

 ?>
