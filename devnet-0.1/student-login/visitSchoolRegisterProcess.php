<<?php
include_once '..\process\connection.php';

  $date=mysqli_real_escape_string($conn,$_POST['dateOfVisit']);
  $date=date('Y-m-d',strtotime($date));
  $purpose=mysqli_real_escape_string($conn,$_POST['purpose']);
  $idType=mysqli_real_escape_string($conn,$_POST['idType']);
  $contactNumber = mysqli_real_escape_string($conn,$_POST['contactNumber']);
  $username = "Implement session to set username";

  $sqlStmnt = "INSERT INTO `user_school_visit`(`username`,`dateOfVisit`, `purpose`, `idType`, `contactNumber`)
                VALUES ('$username','$date','$purpose','$idType','$contactNumber')";


  if($date!="" && $purpose!="" && $idType!=""){
    $resultSet = mysqli_query($conn,$sqlStmnt);
    header("Location: gamechangerVisitSchoolRegisterSuccess.php");
  }else{
    echo "fields are null";
    header("Location: gamechangerVisitSchoolRegister.php");
  }

 ?>
