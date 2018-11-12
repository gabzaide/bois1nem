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

      <!-- BOOTSTRAP AND CSS -->
      <link href="../assets/css/style.css" rel="stylesheet">	
      <link href="../assets/css/bootstrap.css" rel="stylesheet">
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/css/style-responsive.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../assets/css/lineicons/style.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
      <link href="../assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    
      <!-- FONTS -->
      <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

      <!-- JAVASCRIPT -->
      <script src="../assets/js/chart-master/Chart.js"></script>

  </head>

      <!-- ICON -->
    <link rel="icon" type="image/png" href="../assets/images/TESDA Logo.png" />

  <body>

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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme"><I></I>2</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">PERCENTAGE DETAILS</p>
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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php">
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
            <div class="row">
                    <div class="col-lg-12"><center>
                        <h1> TESDA ASSESMENT CENTER </h1>
                        <div class="alert alert-dismissable alert-warning">
                            <button data-dismiss="alert" class="close" type="button">&times;</button>
                             Welcome In Our Dashboard, Admin!!
                            <br/>
                        </div></center>
                    </div>
                </div>

                <div class="row"><center>
                    <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-users"></i> NUMBER OF STUDENTS </h3>
                            </div>
                            <div class="panel-body">
                                <div id="shieldui-chart2">                                         
                                	<?php
                                        $sql = "SELECT count(studentno) AS total FROM students";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-briefcase"></i> NUMBER OF PROGRAMS & SERVICES </h3>
                            </div>
                            <div class="panel-body">
                                <div id="shieldui-chart2">  
									<?php
                                        $sql = "SELECT count(coursenumber) AS total FROM courses";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div> </center>  
                </div>

              <!-- BAR GRAPH START-->
					     <div class="row mt">
                <div class="col-lg-10">
                          <div class="content-panel">
                  <div class="border-head">
                      <center><h2> MONTHLY VISITS </h2></center>
                  </div>
                  <div class="custom-bar-chart">
                    <ul class="y-axis">
                      <li><span>10.000</span></li>
                      <li><span>8.000</span></li>
                      <li><span>6.000</span></li>
                      <li><span>4.000</span></li>
                      <li><span>2.000</span></li>
                      <li><span>0</span></li>
                    </ul>
                    <div class="bar">
                      <div class="title"> JANUARY </div>
                      <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                    </div>
                    <div class="bar ">
                      <div class="title"> FEBRUARY </div>
                      <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                    </div>
                    <div class="bar ">
                      <div class="title"> MARCH </div>
                      <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                    </div>
                    <div class="bar ">
                      <div class="title"> APRIL </div>
                      <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                    </div>
                    <div class="bar">
                      <div class="title"> MAY </div>
                      <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                    </div>
                    <div class="bar ">
                      <div class="title"> JUNE </div>
                      <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                    </div>
                    <div class="bar">
                      <div class="title"> JULY </div>
                      <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                    </div>
                  </div>
					     </div>
             </div>
            </div>
            <!-- BAR GRAPH  ENDS -->

           <br><br><br>
                  
            <!-- FOOTER START -->
              <footer class="site-footer">
                <div class="text-center">
                  © 2018 All Rights Reserved
                    <a href="index.php" class="go-top">
                      <i class="fa fa-angle-up"></i>
                    </a>
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
