<?php
    //connection settings
    //we use the "$conn variable from connection.php"
   include_once 'connection.php';
   include 'gencode.php';

      //echo "$generatekey";
      // login Function
      if(isset($_POST['submit'])){


        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        if($username!="" && $password!=""){
          //sql statment to be queried
          $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
          //mysqli_query is a mysql function that sends a query request to the database
          //it requires two parameters,
          //@1. the mysqli_connect status which is stored in $conn variable found on "connections.php".
          //@2. the sql statement  which is a string stored on the $sql variable
          $result = mysqli_query($conn,$sql);
          //the query result is stored in the $result variable.

          //The fetch_array() / mysqli_fetch_array() function fetches a result row as an associative array, a numeric array,.
          //it requires the query result status and the MYSQLI_ASSOC "MYSQLI_ASSOC = Array items will use the column name as an index key."
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          //after fetching row it returns an integer value in which identifies how many matches were found.
          //a match of "1" means a record that matches the input parameter is present marking a correct login
          $count = mysqli_num_rows($result);

          echo $count;

              //standard href redireton
              if ($count==1) {
                $token = token_keygen(17,7);
                $_SESSION['username'] = $username;
                $_SESSION['token'] = $token;

                echo $_SESSION['username'];
                echo $_SESSION['token'];

                $token = $_SESSION['token'];

                $sql = "SELECT count(*) AS allcount FROM user_token WHERE username='$username'";
                $result_token = mysqli_query($conn,$sql);
                $row_token = mysqli_fetch_assoc($result_token);
                if($row_token['allcount'] > 0){
                 mysqli_query($conn,"UPDATE user_token set token='$token' where username='$username'");
                }else{
                 mysqli_query($conn,"INSERT into user_token(username,token) values('$username','$token')");
                }
                header('Location: welcome.php');

              } else {
                echo "error";
              }
        }
      }

 ?>

<!doctype html>
<html lang="en">


            <!-- HEAD -->
              <head>
                <!-- LOGO -->
                <link rel="icon" href="img\devnet_logo.png">
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

                  <title>.devnet</title>

              </head>


  <!-- BODY -->
  <body>



      <div class="login-border" id="logindiv">
        <div class="login-text p-5 mt-5 text-center">

            <!-- LOGIN FORM -->
          <form class="loginform" action="" method="post">
              <!-- HEADER -->
              <div class="DevNet-Header">
                  <p class="text-center login_header">.devnet</p>
              </div>

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
            <div class="container mb-3">
              <div class="row">
                <div class="col">
                  <a id="notStud" href="switch\switch_register.php">Not a student?</a>
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







    <!-- Optional JavaScript -->

    <!--===============================================================================================-->
    	<script src="js/login_jquery.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
