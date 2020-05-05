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
          <nav class=" d-none d-md-block bg-light sidebar float-left" style="height: 1000px; margin-left: 0; width: 200px;">
                <div class="sidebar-sticky">
                  <ul class="nav flex-column">
                    <br><br>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">
                       <div class="sidebar-items"> <b>Dashboard</b></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">
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

        <td style="padding:80px; vertical-align:top">
          <table class="table" style="height:30%">
            <tbody height:>
              <tr class="row" style="height:100px;">
                <td class="col-8"style="border: 1px solid;">
                    <span style="font-size:25px" >DATE:</span> <b><span style="font-size:20px" id="dateToday">May 4</span></b>
                </td>
                <td class="col-4"style="border: 1px solid;">
                  <center>
                    <div>
                      <span style="font-size:25px" >TIME</span> <b><span style="font-size:20px" id="timeNow">12:00PM</span></b>
                    <div>
                  </center>
                </td>
              </tr>

              <tr class="row" style="height:100px;">
                <td class="col-4"style="border: 1px solid;">
                  <center>
                    <span style="font-size:25px">Visitors:</span> <b><span style="font-size:20px" id="activeVisitors">25</span></b>
                    <br><br>
                    <button class='btn btn-info' id='refreshVisitor'>Refresh</button>
                  </center>
                </td>
                <td class="col-4"style="border: 1px solid;">
                  <center>
                    <span style="font-size:25px">Checked-in:</span> <b><span style="font-size:20px" id="checkedIn">25</span></b>
                    <br><br>
                    <button class='btn btn-warning' id='checkInButton'><b>Add</b></button>
                  </center>
                </td>
                <td class="col-4"style="border: 1px solid;">
                  <center>
                    <span style="font-size:25px">Check-out:</span> <b><span style="font-size:20px" id="checkedOut">25</span></b>
                    <br><br>
                    <button class='btn btn-warning' id='checkOutButton'><b>Remove</b></button>
                  </center>
                </td>
              </tr>
            </tbody>
          </table> <!--end of First table on top-->

            <table class="table" style="height:70%;">
              <tbody height: 500px>
                <tr class="row" style="height:80%;">

                  <td class="col-6">
                    <center>
                      <span style="font-size:35px"><b>LATEST ACTIVITIES</b></span>
                      <br><br>
                      <div style="border:1px solid; width:80%; height: 85%;"> <!--MAXIMUM IS 8 ACTIVITIES-->
                        <div style="margin:7.5px; border:2px dashed; height:10%; width:90%" >
                          Sample recent activity.
                        </div>
                        <!-- <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample recent activity.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample recent activity.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample recent activity.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample recent activity.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample recent activity.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample recent activity.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample recent activity. -->
                        </div>
                      <div>
                    </center>
                  </td>

                  <td class="col-6">
                    <center>
                      <span style="font-size:35px"><b>EVENTS TODAY</b></span>
                      <br><br>
                      <div style="border:1px solid; width:80%; height: 85%;">
                        <div style="margin:7.5px; border:2px dashed; height:10%; width:90%" >
                          Sample EVENT.
                        </div>
                        <!-- <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample EVENT.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample EVENT.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample EVENT.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample EVENT.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample EVENT.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample EVENT.
                        </div>
                        <div style="margin:10px; border:2px dashed; height:10%; width:90%" >
                          Sample EVENT.
                        </div> -->
                      <div>
                    </center>
                  </td>

                  </tr>
              </tbody>
            </table>
           <!--END OF SECOND TABLE -->

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
