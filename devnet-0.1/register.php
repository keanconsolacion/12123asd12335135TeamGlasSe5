<?php
//connection settings
//we use the "$conn variable from connection.php"
include_once 'process/connection.php';



 ?>

<!doctype html>
<html lang="en">
  <head>
      <link rel="icon" href="img\eve_logo.png">
    <title>EVE</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jquery CDN -->

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- PT SANS CDN -->
    <script src="https://kit.fontawesome.com/e1bff3e01e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/register.css">

    <script
      src="https://code.jquery.com/jquery-3.5.0.js"
      integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
      crossorigin="anonymous"></script>
    <script>
    // JQUERY INTERNAL
    $(function(){
     $(".register-border").hide() // hide registration form onload
     $(".register-border").fadeIn("slow");
    });





      });

</script>
<title>EVE</title>

  </head>
  <body>

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

    <!-- nav -->

    <div class="jumbotron jumbotron-fluid mt-5">
      <div class="container pt-5 shadow jumbocontatiner">
        <h1 class="display-4 text-center">.Guest Visit Registration</h1>
        <h5 class="card-subtitle mb-2 purple text-center">EVE</h5>

        <p class="lead text-center">Please fill up the following.</p>

        <div class="register-border" id="logindiv">

          <div class="login-text p-5">
            <form class="regform" action="confirm-code.php" method="post">

                  <div class="form-group">
                    <label for="formGroupExampleInput">First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Tim" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Middle Name</label>
                    <input type="text" class="form-control"  name="middlename"placeholder="Berners" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Last Name</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Lee" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="email" class="form-control"  name="email"placeholder="optional">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Date of Visit</label>
                    <input type="date" class="form-control" name="date" placeholder="">
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
                    <label for="formGroupExampleInput2">Contanct Number</label>
                    <input type="text" class="form-control" name="contactnum" placeholder="optional">
                  </div>


                          <div class="container mt-4">
                            <div class="row">
                              <div class="col text-center">
                                <input class="btn btn-custom-purple shadow" id="submit" type="submit" name="register" value="Confirm"style="width: 100px;">
                              </div>
                            </div>
                          </div>

            </form>

<?php
if(isset($_POST['register'])){
  $_SESSION['isRegistered'] = 1;
      }

?>

                    </div>
          </div>

        </div>
      </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h3 class="modal-title w-100"><span class="purple">.</span>EVE</h3>
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
                <div class="container text-center ">
                  <div class="row ">
                    <div class="notstudent col w-100">
                      <a id="" href="switch\switch_register.php">Not a student?</a>
                    </div>
                  </div>

                </div>


            </div>
            <div class="modal-footer mt-3">
              <button type="button" class="btn  btn-custom-purple"  data-dismiss="modal" style="width: 100px;">Close</button>
              <input class="btn  btn-custom-purple" id="submit"type="submit" name="submit" value="Login"style="width: 100px;">
            </form>

            </div>
          </div>
        </div>
    </div>


    <!-- Optional JavaScript -->

    <!--===============================================================================================-->
    	<script src="js/login_jquery.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
