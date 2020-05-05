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
    <link rel="stylesheet" type="text/css" href="student-login-css/visitSchoolRegister.css">
    <!-- THIS PAGE JS -->
    <script type="text/javascript" src="student-login-js/visitSchoolRegister.js"></script>

  </head>

  <body onload="Initialize()">

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><h4><b>iHub</b></h4></a>
    </nav>
    
    <div class="main-div">
      <form method="POST" action="visitSchoolRegisterProcess.php">

        <center>
          <br><br>
          <hr>
          <div class="float-left"><h4>&nbsp;&nbsp;&nbsp;&nbsp;Please fill out the form.</h4></div>
          <br><br><br>

          <div class="input-group mb-3 alteredInput" align="center">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">*Date of visit</span>
            </div>
            <input type="date" class="form-control" name="dateOfVisit" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group mb-3 alteredInput" align="center">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">*Purpose of visit</span>
            </div>
            <select class="form-control" name="purpose">
              <option></option>
              <option>Tour</option>
              <option>Enrollment</option>
              <option>Inquiry</option>
              <option>Other</option>
            </select>
          </div>
          <br>
          <div class="input-group mb-3 alteredInput" align="center">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">*Type of ID given</span>
            </div>
            <select class="form-control" name="idType">
              <option></option>
              <option>Government</option>
              <option>Passport</option>
              <option>School ID</option>
              <option>Company ID</option>
              <option>Driver's ID</option>
              <option>Other</option>
            </select>
          </div>
          <br>

          <div class="input-group mb-3 alteredInput" align="center">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Contact number</span>
            </div>
            <input type="number" class="form-control" name="contactNumber" aria-describedby="basic-addon1">
          </div>

          <br><br><br><br>
          <a href="welcome.php" id="clearFieldsButton" class="btn btn-secondary float-left" style="width:150px; margin-left: 10%">Back</a>
          <button id="clearFieldsButton" type="reset" class="btn btn-info float-right" style="width:150px; margin-right: 10%" onclick="ClearFields()">Clear</button>
          <br><br><br>
          <button id="submit" class="btn btn-warning float-right" style="width:150px; margin-right: 10%">Submit</button>
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
