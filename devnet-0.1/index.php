<?php
   include_once 'connection.php';
      if(isset($_POST['submit'])){
        // header("Location:welcome.php");
          $username = mysqli_real_escape_string($conn,$_POST['username']);
          $password= mysqli_real_escape_string($conn,$_POST['password']);

          if($username!="" && $password!=""){
            $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
            $result = mysqli_query($conn,$sql);
            // results must be >1
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

                if ($count==1) {
                  header("Location:welcome.php?login=success#");
                } else {
                  header("Location:error.php");
                }
          }

      }
 ?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="img\devnet_logo.png">
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/ihub_index.css">

    <script
      src="https://code.jquery.com/jquery-3.5.0.js"
      integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
      crossorigin="anonymous"></script>
    <script>
    // JQUERY INTERNAL
    $(function(){
     $(".register-border").hide() // try to hide google navigation bar
    });
    $(document).ready(function(){

      $("#notStud").click(function(){


        $(".register-border").fadeIn("");

        // $(".register-border").show() // try to hide google navigation bar

      });



    });
</script>
<title>IHUB</title>

  </head>
  <body>



      <div class="login-border" id="logindiv">
        <div class="login-text p-5 mt-5 text-center">


          <form class="loginform" action="" method="post">
            <div class="DevNet-Header">
                <p class="text-center login_header">.devnet</p>
            </div>
            <div class="container mt-4">

                <div class="row">
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
          <div class="container mb-3">
            <div class="row">
              <div class="col">
                <a id="notStud" href="#">Not a student?</a>
              </div>
            </div>

          </div>
          <div class="container mt-2">
            <div class="row">
              <div class="col text-center ">
                <input class="btn btn-outline-light" id="submit"type="submit" name="submit" value="login"style="width: 100px;">
              </div>
            </div>
          </div>

          </form>


                  </div>
        </div>
    </div>
      </div>



      <div class="register-border" id="logindiv">
        <div class="p-5 back">
              <a href="">←</a>
      </div>
        <div class="login-text p-5">


          <form class="regform" action="" method="post">
            <div class="DevNet-Header">
                <p class="text-center register_header">.devnet//guest_registration</p>
            </div>
            <form>
  <div class="form-group">
    <label for="formGroupExampleInput">First Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tim" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Middle Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Berners" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Last Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Lee" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="optional">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Date of Visit</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Purpose of Visit</label>
    <select class="custom-select">
      <option selected>Purpose of Visit</option>
      <option value="1">School Tour</option>
      <option value="2">Registrar</option>
      <option value="3">Event</option>
    </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Type of ID</label>
    <select class="custom-select">
      <option selected>Type of ID</option>
      <option value="1">Goverment</option>
      <option value="2">School ID</option>
      <option value="3">Company ID</option>
      <option value="3">Driver License</option>
    </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Contanct Number</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="optional">
  </div>


          <div class="container mt-4">
            <div class="row">
              <div class="col text-center">
                <input class="btn btn-outline-light" id="submit"type="submit" name="submit" value="register"style="width: 100px;">
              </div>
            </div>
          </div>

          </form>


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
