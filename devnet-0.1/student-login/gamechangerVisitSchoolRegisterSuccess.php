
<?php
include_once '..\process\connection.php' ?>

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
    <link rel="stylesheet" type="text/css" href="student-login-css/visitSchoolRegister.css">
    <!-- THIS PAGE JS -->
    <script src="student-login-js/visitSchoolRegister.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><h4><b>iHub</b></h4></a>
    </nav>
    <div class="main-div">
      <form method="POST" action="#">

        <?php
          // $date=mysqli_real_escape_string($conn,$_POST['dateOfVisit']);
          // $date=date('Y-m-d',strtotime($date));
          // $purpose=mysqli_real_escape_string($conn,$_POST['purpose']);
          // $idType=mysqli_real_escape_string($conn,$_POST['idType']);
          // $contactNumber = mysqli_real_escape_string($conn,$_POST['contactNumber']);
         ?>

        <center>
          <div>
            <br><br><br><br>
            <div style="width:50%; height:150px; border: 1px solid; border-radius:15px">
              <?php echo '<br>Juan Dela Cruz<br>
                          Date <br>
                          Purpose<br>
                          Email'?>
            </div>
            <br><br>
            <div style="width:50%; height:150px; border: 1px solid; border-radius:15px">
                <?php echo '<br> Your Code is <br>' ?>
            </div>
            <br>

            <br><br>
            <a href="../index.php" class="btn btn-primary">Home</a><br><br>
            <a href="welcome.php" class="btn btn-primary">Another Transaction</a>
          </div>
        </center>

      </form>
    </div>


    <!-- Optional JavaScript -->

    <!--===============================================================================================-->
    	<script src="js/login_jquery.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
