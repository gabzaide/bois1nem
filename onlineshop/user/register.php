<?php 
	include('connection.php');
	include('registerfunction.php');
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
		    <link href="../assets/css/style-responsive.css" rel="stylesheet">

		    <!-- FONTS -->
		    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		        
  	</head>

  		<!-- ICON -->
		<link rel="icon" type="image/png" href="../assets/images/UBP Logo.png" />
		
  	<body>

	  <div id="login-page">
	  	<div class="container">
	  	
		    <form class="form-login" action="" method="post">
		        <h2 class="form-login-heading"> REGISTER NOW </h2>
		        <div class="login-wrap">	
		        	<label for=""><b> Your Account Number </b></label>
		            <input type="number" class="form-control" placeholder="Account Number" name="accountnumber" autofocus="">
		            <br>
		            <label for=""><b> Account Type </b></label>
		            <select name="accounttype" class="form-control" placeholder="Account Type" required>
		            	<option value=""></option>	
		            	<option value="Debit Card"> Debit Card </option>
		            	<option value="Credit Card"> Credit Card </option>
		            </select>
		         	<br>
		        	<label for=""><b> Enter Your Email Address </b></label>
		            <input type="email" class="form-control" placeholder="Email Address" name="emailaddress" required="">
		            <br>
		           	<label for=""><b> Enter Your Password </b></label>
		            <input type="password" class="form-control" placeholder="Password" name="password" required>
		            <br>
		            <label for=""><b> Enter Your First Name </b></label>
		            <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
		            <br>
		            <label for=""><b> Enter Your Middle Name </b></label>
		            <input type="text" class="form-control" placeholder="Middle Name" name="middlename" required>
		            <br>
		            <label for=""><b> Enter Your Family Name </b></label>
		            <input type="text" class="form-control" placeholder="Family Name" name="familyname" required>
		            <br>
		            <label for=""><b> Enter Your Mobile Number </b></label>
		            <input type="number" class="form-control" placeholder="Mobile Number" name="mobilenumber" required>
		            <br>
		            <label for=""><b> Enter Your Gender </b></label>
		            <select name="gender" class="form-control" placeholder="Gender" required>
		            	<option value=""></option>
		            	<option value="Male">Male</option>
		            	<option value="Female">Female</option>
		            </select>
		         	<br>
		             <label for=""><b> Enter Your Date of Birth </b></label>
		            <input type="date" class="form-control" placeholder="Date of Birth" name="dateofbirth" required>
		             <br>
		             <label for=""><b> Enter Your Place of Birth </b></label>
		            <input type="text" class="form-control" placeholder="Place of Birth" name="placeofbirth" required>
		             <br>
		             <label for=""><b> Enter Your Address </b></label>
		            <input type="text" class="form-control" placeholder="Address" name="address" required>
		             <br>
		            <button class="btn btn-theme btn-block" name="register" type="submit"><i class="fa fa-lock"></i> REGISTER </button><br>
		            <a href="login.php"><button class="btn btn-theme btn-block"><i class="fa fa-lock"></i>  SIGN IN </a></button>
		        </div>
		    </form>	  	

				<br><br><br><br>
	  	
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
