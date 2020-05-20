<?php

<<<<<<< HEAD
require_once '../process/connection.php';
require_once '../process/authenticate_token.php';  // Check user token
require_once '../process/gencode.php';
if(!isset($_SESSION['username'])){
  echo "<script type='text/javascript'>alert('Token Error: Incorrect Login');</script>";
  header('Location: ../index.php?authentication=invalid');
}

// logout
if(isset($_POST['logout'])){
 session_destroy();
 header('Location: ../index.php');
}


 ?>
 <?php

 //HEADER BLOCK
 require_once '../view/header-welcome-login.php';
 //NAVBAR BLOCK
 require_once '../view/navbar/nav-student.php';
 //SIDEBAR BLOCK

 require_once '../view/sidebar/sidebar-login.php';
/*┬─┬ ノ( ゜-゜ノ)
0 - God / It
1 - Event Manager
2 - Security
3 -User
*/
   require_once '../view/sidebar/sidebar-login.php';
   // code...


 ?>

<!--
 <div class="blog-header">
   <div class="container">
     <h1 class="blog-title">The Bootstrap Blog</h1>
     <p class="lead blog-description">An example blog template built with Bootstrap.</p>
   </div>
 </div> -->

 <div class="container mt-5">



   <div class="home" id="home">
     <?php   require_once '../announcement/login-user/iacademy-announcment/01120-A1/01120-A1.php';?>
     <?php   require_once '../announcement/login-user/iacademy-announcment/122319-A9/122319-A9.php';?>
   </div>


     <div class="container jumbocontatiner shadow p-5 visit" id="visit">
     <h2 class="blog-post-title text-center">Visit Registration</h2>
     <p class="blog-post-meta text-center">Please fill up the following up</p>
     <form class="regform" id="visit-form"  method="post">



           <div class="form-group">
             <label for="formGroupExampleInput2">Date of Visit</label>
             <input type="date" class="form-control" name="date" placeholder=""/>
           </div>
           <div class="form-group">
             <label for="formGroupExampleInput2">Purpose of Visit</label>
             <select class="custom-select" name="purpose">
               <option selected>Purpose of Visit</option>
               <option value="School Tour">School Tour</option>
               <option value="Registrar">Registrar</option>
               <option value="Event">Event</option>
             </select>
           </div>
           <div class="form-group">
             <label for="formGroupExampleInput2">Type of ID</label>
             <select class="custom-select" name="idgiven">
               <option selected>Type of ID</option>
               <option value="Goverment">Goverment</option>
               <option value="School ID">School ID</option>
               <option value="Company ID">Company ID</option>
               <option value="Driver License">Driver License</option>
             </select>
           </div>
           <div class="form-group">
             <label for="formGroupExampleInput2">Email</label>
             <input type="email" class="form-control"  name="email"placeholder="Optional"/>
           </div>
           <div class="form-group">
             <label for="formGroupExampleInput2">Contanct Number</label>
             <input type="text" class="form-control" name="contactnum" placeholder="Optional"/>
           </div>


                   <div class="container mt-4">
                     <div class="row">
                       <div class="col text-center">
                         <input class="btn btn-warning shadow" id="submit-visit" type="submit" name="register" value="Confirm"style="width: 100px;"/>
                       </div>
                     </div>
                   </div>

     </form>

   </div>
 </div>



     <!-- <div class="col-sm-3 offset-sm-1 blog-sidebar">
       <div class="sidebar-module sidebar-module-inset">
         <h4>About</h4>
         <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
       </div>
       <div class="sidebar-module">
         <h4>Archives</h4>
         <ol class="list-unstyled">
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">March 2014</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">February 2014</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">January 2014</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">December 2013</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">November 2013</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">October 2013</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">September 2013</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">August 2013</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">July 2013</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">June 2013</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">May 2013</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">April 2013</a></li>
         </ol>
       </div>
       <div class="sidebar-module">
         <h4>Elsewhere</h4>
         <ol class="list-unstyled">
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">GitHub</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">Twitter</a></li>
           <li><a href="https://v4-alpha.getbootstrap.com/examples/blog/#">Facebook</a></li>
         </ol>
       </div>
     </div><!-- /.blog-sidebar -->

 <div class="jumbotron jumbotron-fluid" id="confirm-code-user">
   <div class="container p-5 jumbocontatiner shadow ">
 <div class="blog-post text-center">
   <h2 class="blog-post-title ">CONFIRMATION</h2>
   <p class="blog-post-meta">Please verify details</p>
   <hr>
<?php

$firstname = mysqli_real_escape_string($conn,$_SESSION['firstName']);
$middlename = mysqli_real_escape_string($conn,$_SESSION['middleName']);
$lastname = mysqli_real_escape_string($conn,$_SESSION['lastName']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$date = mysqli_real_escape_string($conn,$_POST['date']);
// //we need to cast date variable because MYSQL Date format is YYY-MMM-DDD
$date=date('Y-m-d',strtotime($date));
$purpose = mysqli_real_escape_string($conn,$_POST['purpose']);
$idgiven = mysqli_real_escape_string($conn,$_POST['idgiven']);
$contactnum = mysqli_real_escape_string($conn,$_POST['contactnum']);
$generatekey = guest_keygen(6,2);



 ?>

   <div class="" id="">
     <div class="">
       <div class="login-text p-5 text-center ">
             <h1 class="header-code"></h1>
                 <h5 class="mt-3"><?php echo $firstname.' '.$middlename.' '.$lastname;?></h5>
                 <h5 class="mt-3"><?php echo $date;?></h5>
                 <h5 class="mt-3"><?php echo $purpose;?></h5>
                 <h5 class="mt-3"><?php echo $email;?></h5>
           </div>
     </div>
     <div class=" shadow border">
       <div class="login-text p-5  text-center ">
             <h2 class="header-code">YOUR CODE</h2>
       <span class="yellow">   <h1 id="code"><?php echo $generatekey ?></h1></span>
             <h4>Valid for 1 transaction only</h4>
           </div>
     </div>
     <div class="info p-5 text-center info-note">
         Please save your CODE number and present it at the front desk
     </div>

     <form class="text-center"  action="../process/process-user-visit.php" method="post">
       <div class="hiddenform" action= "hide">
         <input type="hidden" name="firstname" value="<?php echo "$firstname" ?>"/>
         <input type="hidden" name="middlename" value="<?php echo "$middlename" ?>"/>
         <input type="hidden" name="lastname" value="<?php echo "$lastname" ?>"/>
         <input type="hidden" name="email" value="<?php echo "$email" ?>"/>
         <input type="hidden" name="date" value="<?php echo "$date" ?>"/>
         <input type="hidden" name="email" value="<?php echo "$email" ?>"/>
         <input type="hidden" name="purpose" value="<?php echo "$purpose" ?>"/>
         <input type="hidden" name="idgiven" value="<?php echo "$idgiven" ?>"/>
         <input type="hidden" name="contactnum" value="<?php echo "$contactnum" ?>"/>
         <input type="hidden" name="generatekey" value="<?php echo "$generatekey" ?>"/>
       </div>

         <input class="btn btn-outline-warning ml-1" type="submit" id="confirm-code" name="confirm-visit" value="Confirm">
     </form>
     <button class="btn btn-outline-warning"  id="edit" type="button" name="button">Edit</button>

     <?php



      ?>

   </div>


 </div>
 </div>
 </div>
 <!-- /.container -->
<?php







 ?>


 <!-- <div class="jumbotron jumbotron-fluid mt-5 ">
   <div class="container p-5 jumbocontatiner shadow ">
     <h1 class="display-4 font-weight-bold text-center">What would you like to do<span class="purple">?</span></h1>

     <a href="gamechangerVisitSchoolRegister.php" class="btn btn-info button-shadow" style="width: 250px; height: 50px; text-align:center;">Visit School</a><br><br>


      <div class="display-card float right" style="margin-top: 17.5%; margin-bottom: 15%">
         <a href="gamechangerVisitSchoolRegister.php" class="btn btn-info button-shadow" style="width: 250px; height: 50px; text-align:center;">Visit School</a><br><br>
         <a href="#" class="btn btn-info button-shadow" style="width: 250px; height: 50px; text-align:center;">Events</a>
         <br><br><br><br>

         <form action="index.php">
            <input class="btn btn-danger" style="width: 125px;"type="submit" value="Logout" name="logout">
           </form>
     </div>
=======
// include '../process/connection.php';
// include '../process/authenticate_token.php';  // Check user token
//
// if(!isset($_SESSION['username'])){
//   echo "<script type='text/javascript'>alert('Token Error: Incorrect Login');</script>";
//   header('Location: ../index.php?authentication=invalid');
// }
//
// // logout
// if(isset($_POST['logout'])){
//  session_destroy();
//  header('Location: ../index.php');
// }


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
    <link rel="stylesheet" type="text/css" href="student-login-css/welcome.css">
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><h4><b>EVE - GAMECHANGER LOGIN</b></h4></a>
    </nav>

    <div class="main-div">
      <h1></h1>
      <!--<h2><?php// echo @"debug: tokenID - ".$_SESSION['token'] ?></h2>-->

      <div class="display-card float-left" style="margin-top: 20%; margin-left: 10%">
          <h3><b>What would you like <br>to do?</b></h3>
      </div>

      <div class="display-card float right" style="margin-top: 17.5%; margin-bottom: 15%">
          <a href="gamechangerVisitSchoolRegister.php" class="btn btn-info button-shadow" style="width: 250px; height: 50px; text-align:center;">Visit School</a><br><br>
          <a href="../events/event-landing.php" class="btn btn-info button-shadow" style="width: 250px; height: 50px; text-align:center;">Events</a>
          <br><br><br><br>
>>>>>>> master

   </div>
 </div> -->





    <?php
    //MODAL BLOCK

    require_once '../view/modal/logout-modal.php';
    require_once '../process/logout.php';

    //FOOTER BLOCK
    require_once '../view/footer-main.php';

    ?>
