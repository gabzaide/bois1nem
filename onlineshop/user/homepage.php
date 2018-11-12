<!DOCTYPE html>

<html>

	<head>
		
		<meta charset="UTF-8" />
		
			<!-- TITLE -->
			<title> Uniwards </title>
			<link rel="stylesheet" type="text/css" href="css/stylesheet 2.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

			<!-- FONTS LINKS -->
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="css/materialize/css/materialize.css">
			<link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
			<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet' type='text/css'>

			<!-- SCRIPT LINKS -->
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="css/materialize/js/materialize.min.js"></script>
			<script>
				$(document).ready(function() {
					$(".button-collapse").sideNav();
					$('.slider').slider();
				});
			</script>		
	
	</head>

		<!-- ICON -->
		<link rel="icon" type="image/png" href="images/UBP Logo.png" />
		
	<body>

		<!-- HEADER -->
		<div class="header">
			<p><br>
				<div class="reg"><a data-toggle="modal" href="homepage#myModal" class="active"><i class="fa fa-user-circle-o"></i> <span class="reg1">&nbsp; Register </span></div></a>
				<div class="login"><a href="login.php" class="active"><i class="fa fa-sign-in"></i> <span class="log">&nbsp; Log In </a></span></div>
			</p>
		</div>	  
		<br>

		<!-- NAVIGATION -->
		<nav>
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo"> Uniwards </a>
					
				
				<ul class="right hide-on-med-and-down">
				  <li><a href="homepage.php" class="active"><i class="fa fa-home"></i>&nbsp; Home </a></li>
				  <li><a class="dropdown-button" href="#" data-activates="dropdown1"> Rewards <i class="material-icons right"></i></a></li>

				  <!-- DROPDOWN STRUCTURE -->
					<ul id="dropdown1" class="dropdown-content">
					  <li><a href="agriculture.php"> HAHA </a></li>	
					  <li><a href="automotive.php"> HAHA </a></li>
					</ul>
				  <li><a href="aboutus.php">About Us</a></li>
				  <li><a href="contactus.php">Contact</a></li>
				</ul>
			</div>
		</nav>

		<!-- SLIDESHOW -->
	  <div class="slider">
	  <div class="arrows prev"></div>
	  <div class="arrows next"></div>
	    <ul class="slides">
	      <li>
	        <img src="images/ubscape.jpg">
	        <div class="caption" id="cc">
	          <h3 id="h33"> Uniwards </h3>
	          <h5 id="h55"> Fuel your desires. </h5>
			  <button class="Shop"><i class="fa fa-sign-in"></i></i>&nbsp;&nbsp;Log In</button>
			  <button class="Personalize"><i class="fa fa-user-circle-o"></i>&nbsp;&nbsp;Register</button>
	        </div>
	      </li>
	      <li>
	        <img src="images/nem.jpg"> 
	        <div class="caption right-align" id="cc">
	          <h3 id="h33"> Prototype Rewards System </h3>
	          <h5 id="h55"="light grey-text text-lighten-3"> using NEM Nanowallet </h5>
			    </div>
	      </li>
	      <li>
	        <img src="images/quality.jpg"> 
	        <div class="caption left-align" id="cc">
	          <h3 id="h33">Quality Policy</h3>
	          <h5 id="h55">We Measure our worth by the Satisfaction of the Customer</h5>
			  
	        </div>
	      </li>
	      <li>
	        <img src="images/techskill.jpg">
	        <div class="caption right-align" id="cc">
	          <h3 id="h33">Implements Program Geared</h3>
	          <h5 id="h55">A Quality Assured and Inclusive Technical Educational Skills</h5>
		
	        </div>
	      </li>
	    </ul>
	  </div>
	
	 
	  <br><br><br>

	  <!-- FOOTER -->
		<footer>
			
			<div class="splitter"></div>
				<ul>
					<li>
						<div class="text">
							<h4>About</h4>
								<div>Union Bank of the Philippines (UnionBank) is a publicly-listed universal bank. The Bank distinguishes itself through superior technology, unique branch sales and service culture, and centralized backroom operations. UnionBank’s superior technology allows delivery of online, real time business solutions to meet the customers’ changing and diverse needs through innovative and customized cash management products and service offerings. The Bank’s unique branch culture ensures efficient and quality service as well as mitigates operational risk. Its centralized operations enables the Bank to provide responsive, scalable, and secure transaction processing.
								<a href="#">Read more</a></div>
						</div>
					</li>
					<li>
						<div class="text">
							<h4>Mandate</h4>
								<div>The Bank’s corporate vision is to become one of the top three (3) universal banks in the Philippines in respect to market capitalization, profits and customer coverage, grounded on its purpose of “Making the Diff” by connecting and enabling communities through Smart Banking in the spirit of UBUNTU, which means community building. To achieve this vision, UnionBank has adopted five (5) key strategic imperatives, referred to as “FOCUS”, which is an acronym for the following
								<a href="#">Read more</a></div>
						</div>
					</li>
					<li>
						<div class="text">
							<h4>Contact </h4>
								<div> Union Bank of the Philippines Reward Points &nbsp;
									Address:&nbsp;PEVOTI Building, TESDA Complex,
                    						East Service Road, Taguig City, PH 1630
									Phone:&nbsp;(+632) 887-7777<br>
									E-mail:&nbsp;setesdapmo@tesda.gov.ph
								<a href="#">Read more</a></div>
						</div>
					</li>
				</ul>

				<div class="bar">
					<div class="bar-wrap">
						<ul class="links">
							<li><a href="homepage.php">Home</a></li>
							<li><a href="#"> Uniwards </a></li>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
							<li><a href="faq.php">FAQ</a></li>
						</ul>
				
				<div class="social">
					<div class="bar">
						<div class="bar-wrap">
							<div class="social">
								<a href="https://www.facebook.com/" class="fb">
									<span data-icon="f" class="icon"></span>
								</a>
								<a href="https://twitter.com/?lang=en" class="tw">
									<span data-icon="T" class="icon"></span>
								</a>
								<a href="https://www.youtube.com/" class="rss">
									<span data-icon="R" class="icon"></span>
								</a>
							</div>
								<div class="clear"></div>
						</div>
					</div>
				</div>
				
				<div class="clear"></div>
					<div class="copyright">&copy;  2018 All Rights Reserved </div>
				</div>
			</div>

		</footer></center>


	  	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		        	<form class="form-login" method="post" action="">
		            	<div class="modal-header">
		                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                	<h4 class="modal-title"> SIGN UP NOW! </h4>
		            	</div>
		        		<div class="login-wrap">
		        			<label for=""><b> Enter Your Username </b></label>
		            		<input type="text" class="form-control" placeholder="Username" name="username" autofocus>
		            		<br>
		            	<label for=""><b> Enter Your Password </b></label>
		            	<input type="password" class="form-control" placeholder="Password" name="password" required>
		            		<br><br>
		            	<label class="checkbox">
		                <span class="pull-center">
		                    <center><a data-toggle="modal" href="homepage#myModal"> Forgot Password? </a></center>
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" name="login" type="submit"><i class="fa fa-lock"></i> SIGN IN </button>
		            <hr>
		            <div class="registration">
		                Don't Have an Account Yet?<br/>
		                <a class="" href="register.php">
		                    Create An Account
		                </a>
		            </div>
      	</div>
    </div>

	</body>

</html>
