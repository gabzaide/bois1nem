<?php 
	include('connection.php');
	include('registerfunction.php');
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
		    <link href="../assets/css/style-responsive.css" rel="stylesheet">

		    <!-- FONTS -->
		    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		        
  	</head>

  		<!-- ICON -->
		<link rel="icon" type="image/png" href="../assets/images/TESDA Logo.png" />
		
  	<body>

	  <div id="login-page">
	  	<div class="container">
	  	
		    <form class="form-login" action="" method="post">
		        <h2 class="form-login-heading"> REGISTER NOW </h2>
		        <div class="login-wrap">	
		            <input type="hidden" class="form-control" value="Pending" name="status" readonly>
		             <br>
		        	<label for=""><b> Enter Your Student Number </b></label>
		            <input type="text" class="form-control" placeholder="Studentnumber" name="studentno" autofocus>
		            <br>
		            <label for=""><b> Enter Your Course </b></label>
		           	<select name="course" class="form-control" placeholder="Course" required>
		            	<option value="Automotive">Automotive</option>
		            	<option value="Electronics">Electronics</option>
		            	<option value="Entrepreneurship">Entrepreneurship</option>
		            </select>
		            <br>
		            <label for=""><b> Enter Your Branch </b></label>
		            <select name="branch" class="form-control" placeholder="Branch" required>
		            	<option value="Fairview">Fairview</option>
		            	<option value="Fairview">Batasan</option>
		            	<option value="Fairview">Quezon City</option>
		            </select>
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
		            <input type="text" class="form-control" placeholder="First Name" name="lastname" required>
		            <br>
		             <label for=""><b> Enter Your Age </b></label>
		            <input type="text" class="form-control" placeholder="Age" name="age" required>
		            <br>
		             <label for=""><b> Enter Your Gender </b></label>
		             <select name="gender" class="form-control" placeholder="Gender" required>
		            	<option value="Male">Male</option>
		            	<option value="Female">Female</option>
		            	<option value="Other">Other</option>
		            </select>
		         	<br>
		             <label for=""><b> Enter Your Religion </b></label>
		            <input type="text" class="form-control" placeholder="Religion" name="religion" required>
		             <br>
		             <label for=""><b> Enter Your Citizenship </b></label>
		            <input type="text" class="form-control" placeholder="Citizenship" name="citizen" required>
		             <br>
		             <label for=""><b> Enter Your Civil Status </b></label>
		            <input type="text" class="form-control" placeholder="Civil Status" name="civil" required>
		             <br>
		             <label for=""><b> Enter Your Date of Birth </b></label>
		            <input type="date" class="form-control" placeholder="Date of Birth" name="dateofbirth" required>
		             <br>
		             <label for=""><b> Enter Your Place of Birth </b></label>
		            <input type="text" class="form-control" placeholder="Place of Birth" name="placeofbirth" required>
		             <br>
		             <label for=""><b> Enter Your Contact Number </b></label>
		            <input type="text" class="form-control" placeholder="Contact" name="contact" required>
		             <br>
		             <label for=""><b> Enter Your Address </b></label>
		            <input type="text" class="form-control" placeholder="Address" name="address" required>
		             <br>
		             <label for=""><b> Enter Your Email </b></label>
		            <input type="email" class="form-control" placeholder="Email" name="emailaddress" required>
		            <br><br>
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
		 $.backstretch("../assets/images/Login Background.jpg", {speed: 500});
	  </script>

  </body>
</html>
