<?php 
	include('connection.php');
	include('loginfunction.php');
 ?>
<!DOCTYPE html>

<html>

	<head>
		
		<meta charset="UTF-8" />
		
			<!-- TITLE -->
			<title> Uniwards </title>
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">

		    <!-- BOOTSTRAP AND CSS -->    
		    <link href="../assets/css/style.css" rel="stylesheet">
		    <link href="../assets/css/bootstrap.css" rel="stylesheet">
		    <link href="../ssets/css/style-responsive.css" rel="stylesheet">

		    <!-- FONTS -->
		    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		        
  	</head>

  		<!-- ICON -->
		<link rel="icon" type="image/png" href="Images/UBP Logo.png" />
		
  	<body>

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post" action="user.php">
		        <h2 class="form-login-heading"> SIGN UP NOW </h2>
		        <div class="login-wrap">
		        	<label for=""><b> Enter Your Account Number </b></label>
		            <input type="text" class="form-control" placeholder="Account Number" name="accountnumber" autofocus>
		            <br>
		            <label for=""><b> Enter Your Password </b></label>
		            <input type="password" class="form-control" placeholder="Password" name="password" required>
		            <br><br>
		            <label class="checkbox">
		                <span class="pull-center">
		                    <center><a data-toggle="modal" href="Login#myModal"> Forgot Password? </a></center>
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" name="login" type="submit"><i class="fa fa-lock"></i> SIGN IN </button>
		            <hr>
		            <div class="registration">
		                Don't Have an Account Yet?<br/>
		                <a class="" href="../user/register.php">
		                    Create An Account
		                </a>
		            </div>
		
		        </div>
		
		          <!-- FORGET PASSWORD MODAL 
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter Your E-Mail Address Below To Reset Your Password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div> -->
		      </form>	  	
	  	
	  		  
	  	</div>
	  </div>

	  <!-- JAVASCRIPT BACKSTRETCH -->
	  <script src="../assets/js/jquery.js"></script>
	  <script src="../assets/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="../assets/js/jquery.backstretch.min.js"></script>
	  <script>
		 $.backstretch("../assets/images/Background.jpg", {speed: 500});
	  </script>



  </body>
</html>
