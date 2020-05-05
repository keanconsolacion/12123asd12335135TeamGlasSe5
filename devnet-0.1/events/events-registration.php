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
    <link rel="stylesheet" type="text/css" href="../css/ihub_index.css">

  </head>
  <body>
    <div class="register-border" id="logindiv">
      <div class="p-5 back">
            <a href="switch/switch_index.php">←</a>
    </div>
      <div class="login-text p-5">


        <form class="events-regform" action="#" method="post">
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
                <input type="email" class="form-control"  name="email" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Date of Visit</label>
                <input type="date" class="form-control" name="date" placeholder="">
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


              <!-- <div class="container mt-4">
                <div class="row">
                  <div class="col text-center">
                    <input class="btn btn-outline-light" id="submit" type="submit" name="register" value="register"style="width: 100px;">
                  </div>
                </div>
              </div> -->

              <a href="welcome.php" id="clearFieldsButton" class="btn btn-secondary float-left" style="width:150px; margin-left: 10%">Back</a>
              <button id="clearFieldsButton" type="reset" class="btn btn-info float-right" style="width:150px; margin-right: 10%" onclick="ClearFields()">Clear</button>
              <button id="submit" class="btn btn-warning float-right" style="width:150px; margin-right: 10%">Submit</button>

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
