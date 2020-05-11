<?php

include_once 'process/connection.php';
include_once 'process/gencode.php';
// registration variables, with mysqli to prevent SQL Attack

      $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
      $middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
      $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $date = mysqli_real_escape_string($conn,$_POST['date']);
      // //we need to cast date variable because MYSQL Date format is YYY-MMM-DDD
      $date=date('Y-m-d',strtotime($date));
      $purpose = mysqli_real_escape_string($conn,$_POST['purpose']);
      $idgiven = mysqli_real_escape_string($conn,$_POST['idgiven']);
      $contactnum = mysqli_real_escape_string($conn,$_POST['contactnum']);
      $generatekey = guest_keygen(6,2);



      // //we need to cast date variable because MYSQL Date format is YYY-MMM-DDD

      if(isset($_POST['register'])){
        $_SESSION['isRegistered'] = 1;
            }


                  if ($_SESSION['isRegistered'] != 1) {
                    header('Location: index.php');
                  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EVE</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- PT SANS CDN -->
    <script src="https://kit.fontawesome.com/e1bff3e01e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/register.css">

    <script>
    $(function () {
     $(".hiddenform").hide();
   });
    </script>
  </head>
  <body>
      <link rel="icon" href="img\eve_logo.png">
      <nav class="navbar navbar-expand-md navbar-dark  navbar-custom shadow rounded row fixed-top mb-5">
        <div class="col-xl-3">

        </div>
          <div class=" col-xl-4">
            <a href="index.php" class="navbar-brand nav-title"><span class="purple">.</span>EVE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar6">
                    <span class="navbar-toggler-icon"></span>
                </button>
          </div>

              <div class="navbar-collapse collapse justify-content-stretch navright col-xl-3 ml-5" id="navbar6">
                  <!-- <ul class="navbar-nav">
                      <li class="nav-item active">
                          <a class="nav-link" href="#">Link <span class="sr-only">Home</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                      </li>
                  </ul> -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-text navlink" href="changelog.php">Changelog</a>
                    </li
                    <li class="nav-item">
                        <a class="nav-text navlink" href="register.php">Guest</a>
                    </li>
                      <li class="nav-item">
                          <a class="nav-text navlink" data-toggle="modal" data-target="#exampleModal" href="#">Login</a>
                      </li>
                  </ul>
              </div>


      </nav>
    <nav class="navbar fixed-bottom navbar-dark  navbar-custom ">
      <a class="navbar-brand mx-auto d-block text-center w-100 nav-bottom" href="#">©TEAM OTSO</a>
    </nav>

    <!-- nav -->

    <div class="jumbotron jumbotron-fluid mt-5 ">
      <div class="container p-5 shadow jumbocontatiner">
        <h1 class="display-4 text-center">WELCOME!</h1>
        <h5 class="card-subtitle mb-2 text-muted text-center">EVE</h5>

        <div class="code-border" id="logindiv">
          <div class="inside-border">
            <div class="login-text p-5 text-center inside-div">
                  <h1 class="header-code"></h1>
                      <h5 class="mt-3"><?php echo $firstname.' '.$middlename.' '.$lastname;?></h5>
                      <h5 class="mt-3"><?php echo $date;?></h5>
                      <h5 class="mt-3"><?php echo $purpose;?></h5>
                      <h5 class="mt-3"><?php echo $email;?></h5>
                </div>
          </div>
          <div class="inside-border shadow border">
            <div class="login-text p-5  text-center inside-div">
                  <h2 class="header-code">YOUR CODE</h2>
            <span class="purple">   <h1 id="code"><?php echo $generatekey ?></h1></span>
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
              <a class="btn btn-outline-light btn-edit " id="confirm" href="javascript:history.go(-1)">Edit</a>

              <input class="btn btn-outline-light" type="submit" id="confirm" name="confirm" value="Confirm">
          </form>
          <?php



           ?>

        </div>

      </div>
    </div>




    <!-- LOGIN MODAL -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title w-100">.EVE</h3>
              </div>
            <div class="modal-body">
              <form class="loginform" action="" method="post">
                  <!-- HEADER -->

                  <!-- FIRST INPUT DIV // USERNAME -->
                <div class="container mt-4">
                    <div class="row">
                      <!-- USER ICON -->
                      <div class="col-1">
                        <span style="font-size: 25px;">
                          <i class="fas fa-user icon"></i>
                        </span>
                      </div>
                      <div class="col-11">
                        <input type="text" class="form-control" id="user" name="username"placeholder="Username" required >
                      </div>
                    </div>
                </div>
      <div class="container mt-3">
        <div class="row">

            <!-- PASSWORD ICON -->
            <div class="col-1">
            <span style="font-size: 25px;">
              <i class="fas fa-key icon"></i>
            </span>
            </div>

          <div class="col-11">
            <input type="password" class="form-control" id="pass" name="password"placeholder="Password" required >

                </div>
                <div class="container mt-3">
                  <div class="row">
                    <div class="col text-center">
                </div>
                  </div>
                </div>
                <div class="container text-center">
                  <div class="row ">
                    <div class="col w-100">
                      <a id="notStud" href="switch\switch_register.php">Not a student?</a>
                    </div>
                  </div>

                </div>


            </div>
            <div class="modal-footer mt-5">
              <button type="button" class="btn btn-outline-light"  data-dismiss="modal" style="width: 100px;">Close</button>
              <input class="btn btn-outline-light" id="submit"type="submit" name="submit" value="Login"style="width: 100px;">
            </form>

            </div>
          </div>
        </div>
    </div>





    <!-- Optional JavaScript -->

    <!--===============================================================================================-->
    	<script src="js/login_jquery.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
