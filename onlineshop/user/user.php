<?php 
    session_start();
   include('connection.php');

   if (!isset($_SESSION['userlogged'])) {
    header("location:logout.php");
  }
 ?>
 
 <!DOCTYPE html>

<html>

  <head>
    
    <meta charset="UTF-8" />
    
      <!-- TITLE -->
      <title> UBP Rewards </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- BOOTSTRAP AND CSS -->
      <link href="../assets/css/bootstrap.css" rel="stylesheet">
      <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
      <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
      <link href="../assets/css/style.css" rel="stylesheet">
      <link href="../assets/css/style-responsive.css" rel="stylesheet">

      <script src="../assets/js/chart-master/Chart.js"></script>
    
  </head>

      <!-- ICON -->
    <link rel="icon" type="image/png" href="Images/UBP Logo.png" />

  <body>

    <section id="container" >
      <header class="header black-bg">
          <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
          <a href="homepage.php" class="logo"><b> UBP Rewards </b></a>
            <div class="nav notify-row" id="top_menu">
             
            </div>
            <div class="top-menu">
              	<ul class="nav pull-right top-menu">
                      <li><a class="logout" href="../user/logout.php"> Log Out </a></li>
              	</ul>
            </div>
        </header>
      
       <!-- ** MAIN SIDEBAR MENU ** -->
      <!-- SIDEBAR MENU START -->
     
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="#"><img src="../assets/images/Profile.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered"> WELCOME! <br>
                  <?php 
                echo $_SESSION['userlogged'];
              ?>
            </h5>
                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-group"></i>
                          <span> PROFILE </span>
                      </a>
                      <ul class="sub">
                          <li><a href="myaccounts.php"><i class="fa fa-user-circe-o">&nbsp; My Accounts </i></li></a>
                      </ul>
                      <ul class="sub">
                          <li><a href="mypoints.php"><i class="fa fa-user-circe-o">&nbsp; My Acc </i></li></a>
                      </ul>
                  </li>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span> REWARDS </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="exam.php"><i class="fa fa-balance-scale">&nbsp; Points </i></a></li>
                      </ul>
                      <ul class="sub">
                          <li><a  href="exam.php"><i class="fa fa-balance-scale">&nbsp; Redeem Points </i></a></li>
                      </ul>
                  </li>
                 
              <!-- SIDEBAR MENU END -->
          </div>
      </aside>
           
      <!-- *** MAIN CONTENT *** -->
      <!-- MAIN CONTENT START -->
      <section id="main-content">
          <section class="wrapper">
            <div class="row">
                    <div class="col-lg-12"><center>
                        <h1> PROFILE ACCOUNT </h1>
                        <div class="alert alert-dismissable alert-warning">
                         
                             WELCOME!
                            <br/>
                        </div></center>
                    </div>
                </div>
           <br><br><br>
           <!-- BODY START -->

                  
            <!-- FOOTER START -->
              <footer class="site-footer">
                <div class="text-center">
                  © 2018 All Rights Reserved
                    
                </div>
              </footer>
            <!-- FOOTER END -->

      </section>

        <!-- JAVASCRIPT -->
        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/jquery-1.8.3.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>
        <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../assets/js/jquery.sparkline.js"></script>
        <script src="../assets/js/common-scripts.js"></script>  
        <script src="../assets/js/sparkline-chart.js"></script>	
        <!-- JAVASCRIPT END -->

  </body>
</html>