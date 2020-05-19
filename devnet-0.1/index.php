<?php
    //connection settings
    //we use the "$conn variable from connection.php"
   include_once 'process/connection.php';
   include_once 'process/login.php';

      $_SESSION['isRegistered'] = 0;

      //echo "$generatekey";
      // login Function



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
