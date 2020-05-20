<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="/admin-css/admin-stylesheet.css">
    <script type="text/javascript" src="admin-js/admin.js"></script>

    <style media="screen">
    .sidebar{
      margin-left: 0;
      width: 200px;
      height: 100%;
    }
      .sidebar-items{
          padding-top: 20px;
          font-size: 30px;
      }
    </style>

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand float-right" href="#"><h4><b>EVE - ADMIN SECURITY</b></h4></a>
    </nav>

    <table style="height:100%; width: 100%">
      <tr>
        <td style="width:10%;">
          <nav class=" d-none d-md-block bg-light sidebar float-left" style="height: 100%; margin-left: 0; width: 200px;">
                <div class="sidebar-sticky">
                  <ul class="nav flex-column">
                    <br><br>
                    <li class="nav-item">
                      <a class="nav-link active" href="admin.php">
                       <div class="sidebar-items"> <b>Dashboard</b></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="admin-visitor.php">
                       <div class="sidebar-items"> <b>Visitor</b></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">
                       <div class="sidebar-items"> <b>Events</b></div>
                      </a>
                    </li>
                  </ul>

                  <a class="nav-link active" href="..\index.php">
                   <div class="sidebar-items"> <br><br><b>Log out</b></div>
                  </a>
                </div>
              </nav>
        </td>


        <td style="padding: 30px; vertical-align: top"> <!--START OF BODY-->
          <form action="process-order.php" method="post">
            <table class="table">
              <thead>
                <tr class="row">
                  <th class="col-10"></th>
                  <th class="col-2"><input type='text' placeholder='Search...'></th>
                </tr>
                <tr class="row">
                  <th class="col-8"><?php echo date('W-M-d-g:i') ?></th>
                  <th class="col-2"><input type='date' placeholder='Search...'></th>
                  <th class="col-2">
                    <select placeholder='Category'>
                      <option>Category</option>
                      <option>Enrollment</option>
                      <option>Inquiry</option>
                      <option>Event</option>
                    </select>
                  </th>


                </tr>
                <tr class="row">
                  <th class='col-1'></th>
                  <th class="col-2">EVENT NUMBER</th>
                  <th class="col-3">EVENT NAME</th>
                  <th class="col-2">DATE</th>
                  <th class="col-2">TIME</th>
                  <th class="col-2">VENUE</th>
                </tr>

              </thead>
              <tbody>
                <tr class="row" style="height:100%;">
                  <?php
                      include_once "..\process\connection.php";
                      $dateToday = date('Y-m-d');
                      $sqlStmnt = "SELECT * FROM `event_list` WHERE `date` = '$dateToday' ORDER BY `date` DESC";
                      $resultSet2 = mysqli_query($conn,$sqlStmnt);
                      $maxList = 6; //MAX LIST THAT THE CONTAINER CAN HANDLE
                      $counter = 0;

                      while($result2 = mysqli_fetch_array($resultSet2))
                      {
                          echo  '<th class="col-1"></th>'.
                                '<td class="col-2">'.'Sample Code'.'</td>
                                <td class="col-3">'.$result2['eventTitle'].'</td>
                                <td class="col-2">'.$result2['eventCreator'].'</td>
                                <td class="col-2">'.$result2['date'].'</td>
                                <td class="col-2">'.''.'</td>';
                      }
                   ?>
                </tr>

              </tbody>
            </table>
          </form>
        </td> <!--END OF PARENT TD-->
      </tr>
    </table>

    <div>
    </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
