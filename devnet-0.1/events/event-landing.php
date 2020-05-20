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
    <link rel="stylesheet" type="text/css" href="css/ihub_index.css">
    <style type="text/css">
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #174886;
    }

    * {
      box-sizing: border-box;
    }

    .container {
      padding: 16px;
      background-color: white;
    }

    input[type=number] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

    </style>
  </head>
  <body>


    <form class="event-form" method="post" action ="#">
      <div class="container">
        <center><label for="eventCode"><b>Event Code</b></label></center>
        <input type="number" placeholder="Enter event code" name="number" required>

        <center><span> No event code?</span><br/>
        <button type="button" class="btn btn-info">Click Here</button></center> <br/><br/>

        <a href="../student-login/welcome.php" class="btn btn-info button-shadow" style="width: 250px; height: 50px; text-align:center;">Back</a>
        <a href="../events/events-registration.php" class="btn btn-info button-shadow" style="width: 250px; height: 50px; text-align:center;">Next</a>

        <!-- <button type="button" class="btn btn-outline-primary">Back</button>
        <button type="button" class="btn btn-outline-primary" href = "../events/events-registration.php">Next</button> -->


      </div>


      <div>
      </div>
    </form>




    <!-- Optional JavaScript -->

    <!--===============================================================================================-->
    	<script src="js/login_jquery.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
