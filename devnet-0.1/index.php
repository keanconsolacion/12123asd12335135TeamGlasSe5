<?php
    //connection settings
    //we use the "$conn variable from connection.php"
   include_once 'process/connection.php';
   include_once 'process/login.php';

      $_SESSION['isRegistered'] = 0;

      //echo "$generatekey";
      // login Function
      if(isset($_POST['submit'])){


        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        if($username == "adminlobby" && $password  == "adminlobby"){
          header('Location: admin-login\admin.php');
        }elseif ($username == "adminevents" && $password  == "adminevents") {
          header('Location: admin\admin_EventManager.php');
        }

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
                header('Location: student-login\welcome.php');

              } else {
                echo "error";
              }
        }
      }

 ?>



 ?>

<?php

//HEADER BLOCK
require_once 'view/header-main.php';
//NAVBAR BLOCK
require_once 'view/navbar/nav-main.php';
$var1 = $_SESSION['firstName'];
if (empty($var1)) {
}else {
  header('Location:student-login/welcome.php');
}

?>


<!-- navbar -->




<!-- <nav class="navbar fixed-bottom navbar-dark  navbar-custom">
  <small class="navbar-brand mx-auto d-block text-center w-100 nav-bottom">©team-osto</small>

</nav> -->

<!-- nav -->

<div class="jumbotron jumbotron-fluid mt-5 ">
  <div class="container p-5 jumbocontatiner shadow ">
    <h1 class="display-4 font-weight-bold">What is <span class="purple">EVE</span>?</h1>
  <p class="lead jumbolead">it is a web-based <span class="purple">Visitor Management System</span> (VMS) designed to
    track and manage visitors and events. It is a digitized system used to create
    an automated and secure sign-in process while presenting authentic data which
    can be used as an analysis in optimizing visitor registration, safeguarding
    establishment, and even organizing events. </p>
    <span class="purple"></span>
    <p class="lead jumbolead">The system is a <span class="purple">comprehensive</span> and <span class="purple">exceptional</span>
      that embodies efficiency in multiple ways. It makes visiting campus, participating in events,
      or even creating events an easy and trouble-free activity. This system smoothens front desk
      operations by transforming complex and <span class="purple">long waiting registration times</span> into a simple
      and hassle-free action. This system increases the level of security enforced inside a
      premise. It also provides data management in order to make retrieval of data efficient.
 </p>

  </div>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container p-5 jumbocontatiner shadow">
    <div class="blog-post">
      <h2 class="blog-post-title display-4">Our System</h2>
      <p class="blog-post-meta">May 8, 2020 by <span class="purple font-weight-bold">OTSO</span> </p>

      <p><span class="purple font-weight-bold">EVE</span> features two different functionalities for visitors that provides ease and comfort
        that can be rarely seen when using a traditional log book system.
        In <span class="purple font-weight-bold">EVE's</span> system, visitors may choose between visiting the school or participating in
        an event, and they even have the choice to register on-site or to pre-register.
        This feature allows valued guests, customers, and clients to save time and resources.
      </p>

      <h2>Types of Users</h2>
      <hr>
      <p><span class="purple font-weight-bold">EVE</span> categorizes its users into two types. The first type of user is known as <span class="purple">Visitor</span>
        which describes any outsider who is not enrolled in iACADEMY. Meanwhile, the second type of
        user is known as <span class="purple font-weight-bold">Gamechanger</span> which could be further classified into two. It could either
        denote to a person who is enrolled in iACADEMY or a certain staff of the institution that
        plays a role as an admin of the system.</p>
      <h3>Visitor</h3>
      <p><span class="purple font-weight-bold">EVE</span> features two different functionalities for visitors that provides ease and
        comfort that can be rarely seen when using a traditional log book system.
        In <span class="purple font-weight-bold">EVE's</span> system, visitors may choose between visiting the school or
        participating in an event, and they even have the choice to register on-site
        or to pre-register. This feature allows valued guests, customers, and clients
         to save time and resources.
</p>

      <h3>Gamechanger</h3>
      <p>Users of the system who are either currently enrolled in iACADEMY or a
        staff of the institution that is given a role as an admin of the system is
        labelled as “<span class="purple font-weight-bold">Gamechanger</span>”, and aside from the two different functionalities of a visitor,
        gamechangers have the ability to create events.</p>

      <p>Before making a selection,
        they are asked to log-in the system and to input their respective iACADEMY email and password.
        The visit school selection prompts the user to input their respective details,
        and it would still follow the same procedure done by the visitors. Meanwhile,
        if the user opts to select events.</p>

        <blockquote>
        <p>The user may choose from the following</p>
      <ol>
        <li>Create Event.</li>
        <li>See Events.</li>
        <li>Participate Event.</li>
      </ol>
      </blockquote>
      <h3>Admins</h3>

      <p>The admins of iHub are collectively called as “<span class="purple font-weight-bold">Gamechanger</span>”
        that is classified into three different types with various roles and
        permissions depending on their department.</p>

        <ul>
          <li><span class="purple font-weight-bold">Office of Student Experience and Advancement</span> (OSEA) as <span class="purple font-weight-bold">Event Manager</span></li>
          <p>As one of the admins of iHub, the Office of Student Experience and Advancement also
            known as OSEA, has the ability to regulate the event features of the application.
            Their task is to check the events that are created in the application, and they hold the
            capability on whether to approve or decline these events. Some events are organized by the
            department, so they are also given the ability to create events.</p>
            <li> <span class="purple font-weight-bold">Security Officer</span> as  <span class="purple font-weight-bold">Groundskeeper</span></li>
            <p>As one of the admins of iHub, the Office of Student Experience and Advancement also
              known as OSEA, has the ability to regulate the event features of the application.
              Their task is to check the events that are created in the application, and they hold the
              capability on whether to approve or decline these events. Some events are organized by the
              department, so they are also given the ability to create events.</p>
              <li><span class="purple font-weight-bold">I.T. department</span> as  <span class="purple font-weight-bold">Supervisor</span></li>
              <p>As one of the admins of iHub, the Office of Student Experience and Advancement also
                known as OSEA, has the ability to regulate the event features of the application.
                Their task is to check the events that are created in the application, and they hold the
                capability on whether to approve or decline these events. Some events are organized by the
                department, so they are also given the ability to create events.</p>
        </ul>
    </div>
  </div>
</div>











<?php
//MODAL BLOCK
require_once 'view/modal/login-modal.php';
//FOOTER BLOCK
require_once 'view/footer-main.php';

?>
