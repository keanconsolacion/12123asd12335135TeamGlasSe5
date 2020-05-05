<?php
//connection settings
//we use the "$conn variable from connection.php"
include_once 'process/connection.php';




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
    <link rel="stylesheet" type="text/css" href="css/main.css">

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
<title>.devnet</title>

  </head>
  <body>

      <div class="register-border" id="logindiv">
        <div class="p-5 back">
              <a href="switch/switch_index.php">←</a>
      </div>
        <div class="login-text p-5">


          <form class="regform" action="confirm-code.php" method="post">
            <div class="DevNet-Header">
                <p class="text-center register_header">.devnet//guest_registration</p>
            </div>
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
                  <label for="formGroupExampleInput2">Contact Number</label>
                  <input type="text" class="form-control" name="contactnum" placeholder="optional">
                </div>


                        <div class="container mt-4">
                          <div class="row">
                            <div class="col text-center">
                              <input class="btn btn-outline-light" id="submit" type="submit" name="register" value="register"style="width: 100px;">
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
