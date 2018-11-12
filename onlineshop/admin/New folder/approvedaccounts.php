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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="approvedaccounts.php">
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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="approvedaccounts.php">
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
                          <span> PENDING PROFILING </span>
                      </a>
                      <ul class="sub">
                          <li><a href="pendingaccounts.php"><i class="fa fa-user">&nbsp; Accounts </i></li></a>
                      </ul>
                      <ul class="sub">
                          <li><a  href="pendingstudents.php"><i class="fa fa-graduation-cap">&nbsp;  Students </i></a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-group"></i>
                          <span> APPROVED PROFILING </span>
                      </a>                      
                      <ul class="sub">
                          <li><a href="approvedaccounts.php"><i class="fa fa-user">&nbsp; Accounts </i></li></a>
                      </ul>
                      <ul class="sub">
                          <li><a  href="approvedstudents.php"><i class="fa fa-graduation-cap">&nbsp;  Students </i></a></li>
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
                             Welcome In Approved Accounts Panel, Admin!! 
                            <br/>
                        </div></center>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header">
                        <div style="padding:10px;">                
                          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addapprovedaccounts"><h5><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Approve Accounts </h5></button>  &nbsp;&nbsp;
                          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteapprovedaccounts"><h6><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;  Delete Approve Accounts </h6></button>
                        </div>                                
                                <br>
                        </div><!-- /.box-header -->
                          <div class="box-body table-responsive">
                            <form method="post">
                              <table id="table" class="table table-bordered table-striped">
                                <thead>
                                 <tr>
                                  <th style="width: 30px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)" /></th>
                                  <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending" style="width: 350px;"> First Name </th>
                                  <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Middle Name: activate to sort column ascending" style="width: 350px;"> Middle Name </th>
                                  <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Family Name: activate to sort column ascending" style="width: 350px;"> Family Name </th>
                                  <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 350px;"> Email Address </th>
                                  <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 350px;"> Username </th>
                                  <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Password: activate to sort column ascending" style="width: 350px;"> Password </th>
                                  <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 350px;"> Status </th>                                  
                                  <th style="width: 40px !important;">Option</th>
                                 </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                     $sql = "SELECT * FROM admin WHERE status = 'Approved' ORDER BY firstname desc";
                                      $sqlq = mysqli_query($con , $sql);
                                          while ($row = mysqli_fetch_assoc($sqlq)) 
                                            {
                                              echo '
                                            <tr>
                                              <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['firstname'].'" /></td>
                                              <td>'.$row['firstname'].'</td>
                                              <td>'.$row['middlename'].'</td>
                                              <td>'.$row['familyname'].'</td>
                                              <td>'.$row['emailaddress'].'</td>
                                              <td>'.$row['username'].'</td>
                                              <td>'.$row['password'].'</td>
                                              <td>'.$row['status'].'</td>                                              
                                              <td><button class="btn btn-primary btn-sm" data-target="#pendingmodal'.$row['firstname'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update </button></td>
                                              </tr>
                                              ';
                                          
                                          include "pendingmodal.php";
                                        }
                                  ?>
                                </tbody>
                              </table>

                                  <?php include "deletemodal.php"; ?>

                            </form>
                          </div>
                        </div>
                                  <?php include "notification.php"; ?>
                                  <?php include "addmodal.php"; ?>
                                  <?php include "addfunction.php"; ?>
                                  <?php include "updatefunction.php"; ?>
                                  <?php include "deletefunction.php"; ?>     
                                  <?php include "footer.php"; ?>    
 
           <br><br><br>
                  
            <!-- FOOTER START -->
              <footer class="site-footer">
                <div class="text-center">
                  © 2018 All Rights Reserved
                    <a href="approvedaccounts.php" class="go-top">
                      <i class="fa fa-angle-up"></i>
                    </a>
                </div>
              </footer>
            <!-- FOOTER END -->

      </section>


        <!-- JAVASCRIPT -->
          <script type="text/javascript">
            $(function() {
                $("#table").dataTable({
                   "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,3 ] } ],"aaSorting": []
                });
            });
          </script>
          <script type="text/javascript">
            function checkMain(x) {
              var checked = $(x).prop('checked');
              $('.cbxMain').prop('checked', checked)
              $('tr:visible').each(function () {
                  $(this).find('.chk_delete').each(function () {
                      this.checked = checked;
                  });
              });
          }

          $(document).ready(function (){    
            $('.chk_delete').click(function () {
                if ($('.chk_delete:checked').length == $('.chk_delete').length) {
                    $('.cbxMain').prop('checked', true);
                }
                else {
                    $('.cbxMain').prop('checked', false);
                }

                $('#check-all').click(function(){
                $("input:checkbox").attr('checked', true);
              });
            }); 

            $('.no-print').hide();
          });
        </script>  
        <!-- JAVASCRIPT END -->

  </body>
</html>
