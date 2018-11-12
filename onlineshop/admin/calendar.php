<?php 
    session_start();
   include('connection.php');

   if (!isset($_SESSION['adminlogged'])) {
    header("location:logout.php");  
  }
 ?>

<!DOCTYPE html>

<html>

  <head>
    
    <meta charset="UTF-8" />
    
      <!-- TITLE -->
      <title> TESDA Assesment Center </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CASCADING STYLE SHEET -->
      <link href="../assets/css/style.css" rel="stylesheet"/>
      <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
      <link href="../assets/css/style-responsive.css" rel="stylesheet"/>
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
      <link href="../assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="../assets/css/lineicons/style.css"/>
      <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css"/> 
      <link href="../assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

      <!-- FONTS -->
      <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

      <!-- JAVASCRIPT -->
      <script src="../assets/js/jquery.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/common-scripts.js"></script>  
      <script src="../assets/js/jquery-1.8.3.min.js"></script>
      <script src="../assets/js/chart-master/Chart.js"></script>
      <script src="../assets/js/alert.js" type="text/javascript"></script>
      <script src="../assets/js/jquery-1.12.3.js" type="text/javascript"></script>
      <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
      <script src="../assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
      <script src="../assets/js/dataTables.buttons.min.js" type="text/javascript"></script>
      <script src="../assets/js/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
      <script src="../assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
      <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>

  </head>

      <!-- ICON -->
    <link rel="icon" type="image/png" href="../assets/images/TESDA Logo.png" />

  <body>

    <?php   
        ob_start();
        include "connection.php";
        ?>
        

    <section id="container" >
      <header class="header black-bg">
          <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
          <a href="index.php" class="logo"><b> TESDA ASSESMENT CENTER DASHBOARD </b></a>
            <div class="nav notify-row" id="top_menu">
                
                <!-- NOTIFICATION START -->
                <ul class="nav top-menu">

                    <!-- PERCENTEGE DETAILS START -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="courses.php">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme"><I></I>2</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green"> PERCENTAGE DETAILS </p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Students Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Programs & Services Panel</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#"> See All Details </a>
                            </li>
                        </ul>
                    </li>
                    <!--PERCENTAGE DETAILS END -->

                    <!-- MESSAGES DROPDOWN START-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="courses.php">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">1</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green"> MESSAGES </p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../assets/images/Profile.png"></span>
                                    <span class="subject">
                                    <span class="from"> Edward Ables </span>
                                    <span class="time"> Just now </span>
                                    </span>
                                    <span class="message">
                                        Hi Mate, How is Everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#"> See All Messages </a>
                            </li>
                        </ul>
                    </li>
                    <!-- MESSAGES DROPDOWN END -->
                </ul>
                <!-- NOTIFICATION END -->

            </div>

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                      <li><a class="logout" href="logout.php"> Log Out </a></li>
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
                  <h5 class="centered"> WELCOME ADMIN!! </h5>
                    
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span> DASHBOARD </span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-group"></i>
                          <span> ADMIN PROFILING </span>
                      </a>
                      <ul class="sub">
                          <li><a href="adminprofiling.php"><i class="fa fa-user">&nbsp; Accounts </i></li></a>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-group"></i>
                          <span> STUDENT PROFILING </span>
                      </a> 
                      <ul class="sub">
                          <li><a  href="studentsprofiling.php"><i class="fa fa-graduation-cap">&nbsp;  Students </i></a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span> COURSES </span>
                      </a>
                      <ul class="sub">
                          <li><a class="active" href="courses.php"><i class="fa fa-briefcase">&nbsp; Programs & Services </i></a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span> RESULTS </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="results.php"><i class="fa fa-balance-scale">&nbsp; Exam Results </i></a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-calendar"></i>
                          <span> EVENT SCHEDULING </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.php"><i class="fa fa-calendar">&nbsp; Calendar </i></a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- SIDEBAR MENU END -->
          </div>
      </aside>
      
      <!-- *** MAIN CONTENT *** -->
      <!-- MAIN CONTENT START -->
      <section id="main-content">
          <section class="wrapper">
            <div class="row"><br><br>
                    <div class="col-lg-12"><center>
                        <div class="alert alert-dismissable alert-warning">
                            <button data-dismiss="alert" class="close" type="button">&times;</button>
                             Welcome In Calendar Panel, Admin!! 
                            <br/>
                        </div></center>
                    </div>
                </div>

                <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Calendar</h3>
              <!-- page start-->
              <div class="row mt">
                  <aside class="col-lg-3 mt">
                      <h4><i class="fa fa-angle-right"></i> Draggable Events</h4>
                      <div id="external-events">
                          <div class="external-event label label-theme">My Event 1</div>
                          <div class="external-event label label-success">My Event 2</div>
                          <div class="external-event label label-info">My Event 3</div>
                          <div class="external-event label label-warning">My Event 4</div>
                          <div class="external-event label label-danger">My Event 5</div>
                          <div class="external-event label label-default">My Event 6</div>
                          <div class="external-event label label-theme">My Event 7</div>
                          <div class="external-event label label-info">My Event 8</div>
                          <div class="external-event label label-success">My Event 9</div>
                          <p class="drop-after">
                              <input type="checkbox" id="drop-remove">
                              Remove After Drop
                          </p>
                      </div>
                  </aside>
                  <aside class="col-lg-9 mt">
                      <section class="panel">
                          <div class="panel-body">
                              <div idendar" class="has-toolbar"></div>
                          </div>
                      </section>
                  </aside>
              </div>
              <!-- page end-->
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

           <br><br><br>
                  
            <!-- FOOTER START -->
              <footer class="site-footer">
                <div class="text-center">
                  © 2018 All Rights Reserved
                    <a href="calendar.php" class="go-top">
                      <i class="fa fa-angle-up"></i>
                    </a>
                </div>
              </footer>
            <!-- FOOTER END -->

      </section>

        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/jquery-1.8.3.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>
        <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../assets/js/jquery.sparkline.js"></script>
        <script src="../assets/js/common-scripts.js"></script>  
        <script src="../assets/js/sparkline-chart.js"></script> 
        <script src="../assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="../assets/js/dataTables.buttons.min.js" type="text/javascript"></script>
        <script src="../assets/js/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- JAVASCRIPT END -->

  </body>
</html>
