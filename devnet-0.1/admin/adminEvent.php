<html lang="en">
  <head>
    <title>EVE - EVENT MANAGER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="admin_css/adminEvent.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- Local JavaScript -->
    <script type="text/javascript" src="admin_js/admin_event.js"></script>
  </head>

  <!-- UPPER NAVIGATION BAR -->
  <body onload="realtimeDate(), realtimeClock()">
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand float-right" href="#"><h4><b>EVE - EVENT MANAGER</b></h4></a>
    </nav>

    <table style="height:100%; width: 100%">
      <tr>
        <!-- SIDEBAR CONTENT -->
        <div class="container">
        <td style="width:10%;">
          <nav class=" d-none d-md-block bg-light sidebar float-left" style="height: sticky; margin-left: 0; width: 200px;">
                <div class="sidebar-sticky">
                    <a class="nav-link active" href="#">
                     <div class="sidebar-items" style="text-align: center"> <b>Dashboard</b></div>
                    </a>

                      <ul class="nav flex-column">
                        <br><br>
                        <li class="nav-item">
                          <div class="dropdown" style="text-align: center">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Event Diary</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">All Events</a>
                              <a class="dropdown-item" href="#">Create Event</a>
                              <a class="dropdown-item" href="#">Pending Event</a>
                            </div>
                          </div>
                        </li>

                        <br>
                        <li class="nav-item">
                          <div class="dropdown" style="text-align: center">
                            <a href="#"<button class="btn btn-outline-primary" type="button" aria-haspopup="true" aria-expanded="false">Ticket</button></a>
                          </div>
                        </li>
                      </ul>

                      <br><br>
                      <div class="logout" style="text-align: center">
                        <a href="#" class="btn btn-outline-warning btn-lg">
                          <span class="glyphicon glyphicon-log-out"></span> Log out
                        </a>
                      </div>

                </div>
          </nav>
        </td>
      </div>

        <td style="padding:40px; vertical-align:top">
          <table class="table" style="height:30%">
            <tbody height:>
              <div class="jumbotron" style="width: 955px; height:250px">
                  <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
                  <h1>Hello, Admin!</h1>
                  <p>Welcome to your personal event module.</p>
                  <div id="clock"></div>
                  <div id="date"></div>
              </div>

              <div class="row">
                <div class="col-6 col-sm-6 col-lg-4">
                  <div class="jumbotron" style="width: 290px; height:300px">
                      <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
                      <h1 style="font-size: 25px;">Events</h1>
                      <br>
                      <p>DETAILS...</p>
                      <br><br>
                      <p><a class="btn btn-default" href="#">View details »</a></p>
                  </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-4">
                  <div class="jumbotron" style="width: 290px; height:300px">
                      <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
                      <h1 style="font-size: 25px;">Pending Events</h1>
                      <br>
                      <p>DETAILS...</p>
                      <br><br>
                      <p><a class="btn btn-default" href="#">View details »</a></p>
                  </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-4">
                  <div class="jumbotron" style="width: 290px; height:300px">
                      <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
                      <h1 style="font-size: 25px;">Approved Events</h1>
                      <br>
                      <p>DETAILS...</p>
                      <br><br>
                      <p><a class="btn btn-default" href="#">View details »</a></p>
                  </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-4">
                  <div class="jumbotron" style="width: 955; height:300px">
                      <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
                      <h1 style="font-size: 25px; text-align:center">LATEST ACTIVITIES</h1>
                  </div>
                </div>

              </div>
            </tbody>
          </table>  <!-- 1st TABLE END -->

        </td><!--END OF PARENT TD-->
      </tr>
    </table>
    <!-- FOOTER/OPTIONAl -->
    <hr>
    <footer>
        <p style="color:black;">© 2020 Team Otso/SE5</p>
    </footer>
  </body>
</html>
