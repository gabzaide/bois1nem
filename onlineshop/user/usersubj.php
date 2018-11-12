<?php 
    session_start();
   include('../admin/connection.php');

   if (!isset($_SESSION['userlogged'])) {
    header("location:../logout.php");
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
      <link href="../assets/css/bootstrap.css" rel="stylesheet">
      <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
      <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
      <link href="../assets/css/style.css" rel="stylesheet">
      <link href="../assets/css/style-responsive.css" rel="stylesheet">
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
      <script src="../assets/js/chart-master/Chart.js"></script>
    

  </head>

      <!-- ICON -->
    <link rel="icon" type="image/png" href="../assets/images/TESDA Logo.png" />

  <body>

    <?php 
        ob_start();
        include "../admin/connection.php";
        ?>
        

    <section id="container" >
      <header class="header black-bg">
          <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
          <a href="index.php" class="logo"><b> TESDA  </b></a>
            <div class="nav notify-row" id="top_menu">
                
               
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="userlogin.php"> Log Out </a></li>
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
              ?></h5>
                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-group"></i>
                          <span> PROFILE </span>
                      </a>
                      <ul class="sub">
                          <li><a href="usersubj.php"><i class="fa fa-graduation-cap">&nbsp; Subjects </i></li></a>
                      </ul>
                  </li>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span> EXAM RESULTS </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="resuts.php"><i class="fa fa-balance-scale">&nbsp; Exam Results </i></a></li>
                      </ul>
                  </li>
                 
              <!-- SIDEBAR MENU END -->
          </div>
      </aside>
           
      <!-- *** MAIN CONTENT *** -->
      <!-- MAIN CONTENT START -->
      <section id="main-content">
          <section class="wrapper">
            <div class="row"><br><br>
                    <div class="col-lg-12"><center>
                       <h1> PROFILE </h1>
                        <div class="alert alert-dismissable alert-warning">
                           
                              SUBJECTS
                            <br/>
                        </div></center>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header">
                        <div style="padding:10px;">                
                          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addmodal"><h5><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Subject </h5></button>  &nbsp;&nbsp;
            
                        </div>                                
                                <br>
                        </div><!-- /.box-header -->
                          <div class="box-body table-responsive">
                            <form method="post">
                              <table id="table" class="table table-bordered table-striped">
                                <label> 
                                 
                                <thead>
                                 <tr>
                                  <th style="width: 30px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)" /></th>
                                  <th> Course Number </th>
                                  <th> Course Name </th>
                                  <th> Course Objectives </th>
                                  <th> Course Description </th>
                                  <th> Course Mode </th>
                                  <th> Course Duration </th>
                                 </tr>
                                 </thead>
                                <tbody>
                                  <?php
                                    $squery = mysqli_query($con, "select * from courses");
                                      while($row = mysqli_fetch_array($squery))
                                        {
                                          echo '
                                            <tr>
                                              <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['courseid'].'" /></td>
                                              <td>'.$row['coursenumber'].'</td>
                                              <td>'.$row['coursename'].'</td>
                                              <td>'.$row['courseobjective'].'</td>
                                              <td>'.$row['coursedescription'].'</td>
                                              <td>'.$row['coursemode'].'</td>
                                              <td>'.$row['courseduration'].'</td>
                                            
                                              </tr>
                                              ';
                                          
                                          include "../admin/updatemodal.php";
                                        }
                                  ?>
                                </tbody>
                              </table>

                            </form>
                          </div>
                        </div>
                                  <?php include "addsubj.php"; ?>
                                  
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
