<?php
//connection settings
//we use the "$conn variable from connection.php"
include_once 'process/connection.php';
include_once 'process/login.php';
require_once 'view/header-register.php';
require_once 'view/navbar/nav-main.php';



 ?>







<!-- <nav class="navbar fixed-bottom navbar-dark  navbar-custom">
  <small class="navbar-brand mx-auto d-block text-center w-100 nav-bottom">©team-osto</small>

</nav> -->

<!-- nav -->

<div class="jumbotron jumbotron-fluid mt-5 ">
  <div class="container p-5 jumbocontatiner shadow ">
    <h1 class="display-4 text-center">.Changelog</h1>
    <h5 class="card-subtitle mb-2 text-muted text-center">v0.1.5</h5>
<div class="">
  <p class="lead text-center "><a class="sublink" href="https://github.com/keanconsolacion/otso-repository">https://github.com/keanconsolacion/otso-repository</a>.</p>
</div>

                    <div class="list-group list-css">
                  <div class="list-group-item list-group-item-action flex-column align-items-start shadow">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Theme and CSS</h5>
                    <small class="text-muted">6:48PM 5/5/20</small>
                  </div>
                  <p class="mb-1 list-text">+ Reworked theme and css from scratch.</p>
                  <small class="text-muted">Dino Paulo R Gomez</small>
                </div >

                <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start shadow">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Student Login Module</h5>
                  <small class="text-muted">9:18PM 4/23/20</small>
                </div>
                <p class="mb-1 list-text">+ added gamechangerVisitSchoolRegister.Php</p>
                <p class="mb-1 list-text">+ added gamechangerVisitSchoolRegisterSuccess.Php</p>
                <p class="mb-1 list-text">+ added student-login-css & student-login-js</p>
                <p class="mb-1 list-text">+ reworked welcome.php</p>

                <small class="text-muted">Kean Consolacion</small>
                </a>

                <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start shadow">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Reworked Backend Functionalities</h5>
                  <small class="text-muted">05:00PM 4/21/20</small>
                </div>
                <p class="mb-1 list-text">+ reworked connection module.</p>
                <p class="mb-1 list-text">+ reworked gamechanger-register.</p>
                <p class="mb-1 list-text">+ reworked gamechanger-login.</p>
                <p class="mb-1 list-text">+ reworked token generation.</p>
                <small class="text-muted">Dino Paulo R Gomez</small>
                </a>
                </div>

  </div>
</div>

<div class="jumbotron jumbotron-fluid ">
  <div class="container p-5 jumbocontatiner shadow ">
    <h1 class="display-4 text-center">.Changelog</h1>
    <h5 class="card-subtitle mb-2 text-muted text-center">v0.1.4</h5>

    <p class="lead text-center"><a class="sublink" href="https://github.com/keanconsolacion/otso-repository">https://github.com/keanconsolacion/otso-repository</a>.</p>

                    <div class="list-group list-css">
                  <div class="list-group-item list-group-item-action flex-column align-items-start shadow">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Guest Registration</h5>
                    <small class="text-muted">10:47AM 4/17/20</small>
                  </div>
                  <p class="mb-1 list-text">+ added register module. </p>
                  <p class="mb-1 list-text">+ added confirmation module. </p>
                  <p class="mb-1 list-text">+ added code generation module. </p>
                  <p class="mb-1 list-text">+ added tokens. </p>
                  <p class="mb-1 list-text">+ added Session </p>

                  <small class="text-muted">Dino Paulo R Gomez</small>
                </div >



  </div>
</div>


<!-- LOGIN MODAL -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
            <h3 class="modal-title w-100"><span class="purple">.</span>EVE</h3>
          </div>
        <div class="modal-body">
          <form class="loginform" action="" method="post">
              <!-- HEADER -->

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
            <div class="container text-center ">
              <div class="row ">
                <div class="notstudent col w-100">
                  <a id="" href="switch\switch_register.php">Not a student?</a>
                </div>
              </div>

            </div>


        </div>
        <div class="modal-footer mt-3">
          <button type="button" class="btn btn-custom-purple"  data-dismiss="modal" style="width: 100px;">CLOSE</button>
          <input class="btn btn-custom-purple" id="submit"type="submit" name="submit" value="LOGIN"style="width: 100px;">
        </form>

        </div>
      </div>
    </div>
</div>







<?php
//MODAL BLOCK
require_once 'view/modal/login-modal.php';
//FOOTER BLOCK
require_once 'view/footer-main.php';

?>
