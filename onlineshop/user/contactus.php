<!DOCTYPE html>

<html>

	<head>
		
		<meta charset="UTF-8" />
		
			<!-- TITLE -->
			<title> TESDA Assesment Center </title>
			<link rel="stylesheet" type="text/css" href="css/stylesheet 2.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

			<!-- FONTS LINKS -->
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="css/materialize/css/materialize.css">
			<link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

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
		<link rel="icon" type="image/png" href="images/TESDA Logo.png" />
		
	<body>

		<!-- HEADER -->
		<div class="header">
			<p><br>
				<div class="reg"><i class="fa fa-user-circle-o"></i> <span class="reg1">&nbsp; Register </span></div>
				<div class="login"><i class="fa fa-sign-in"></i> <span class="log">&nbsp; Log In </span></div>
			</p>
		</div>
		<br>

		<!-- NAVIGATION -->
		<nav>
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo"> TESDA </a>
					<div class="wrap">
					   <div class="search">
						  <input type="text" class="searchTerm" placeholder="What are you looking for?">
						  <button type="submit" class="searchButton">
							<i class="fa fa-search"></i>
						 </button>
					   </div>
					</div>
				
				<ul class="right hide-on-med-and-down">
				  <li><a href="homepage.html" class="active"><i class="fa fa-home"></i>&nbsp; Home</a></li>
				  <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Programs & Services <i class="material-icons right"></i></a></li>
				  <!-- DROPDOWN STRUCTURE -->
					<ul id="dropdown1" class="dropdown-content">
					  <li><a href="agriculture.html"> Agriculture </a></li>	
					  <li><a href="automotive.html"> Automotive </a></li>
					  <li><a href="comtech.html"> Communication Technology </a></li>
					  <li><a href="electronics.html"> Electronics </a></li>
					  <li><a href="entrep.html"> Entrepreneurship </a></li>	
					  <li><a href="humanhealthcare.html"> Human Health / Health Care </a></li>
					  <li><a href="learningskills.html"> Lifelong Learning Skills </a></li>
					  <li><a href="maritime.html"> Maritime </a></li>	
					  <li><a href="tourism.html"> Tourism </a></li>
					</ul>
				  <li><a href="aboutus.html">About Us</a></li>
				  <li><a href="contactus.html">Contact</a></li>
				</ul>
			</div>
		</nav>

	  <!-- CONTENT -->
	  <div class="row">
		<div class="col s11" id="c1">
			<div class="col s3" id="c2"><img src="images/1.jpg"><h4>Automotive<p></h4></div>
			<div class="col s3" id="c2"><img src="images/1.jpg"><h4>Agriculture</h4></div>
			<div class="col s3" id="c2"><img src="images/1.jpg"><h4>Tourism</h4></div>
		</div>
	  </div>

	  <br><br><br>

	  <!-- FOOTER -->
		<footer>
			
			<div class="splitter"></div>
				<ul>
					<li>
						<div class="text">
							<h4>About</h4>
								<div>The TESDA Online Program (TOP) is an open educational resource that aims to make technical education more accessible to Filipino citizens through the use of information and communication technologies. TOP provides an effective and efficient way to deliver technical education and skills development services to a broader audience/wide range of users/all learners at a lesser cost.
								<a href="#">Read more</a></div>
						</div>
					</li>
					<li>
						<div class="text">
							<h4>Mandate</h4>
								<div>The Technical Education and Skills Development Authority (TESDA) is the government agency tasked to manage and supervise technical education and skills development (TESD) in the Philippines. It was created by virtue of Republic Act 7796, otherwise known as the “Technical Education and Skills Development Act of 1994”.
								<a href="#">Read more</a></div>
						</div>
					</li>
					<li>
						<div class="text">
							<h4>Contact </h4>
								<div>eTESDA Project Management Unit &nbsp;
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
							<li><a href="homepage.html">Home</a></li>
							<li><a href="aboutus.html">About Us</a></li>
							<li><a href="contactus.html">Contact Us</a></li>
							<li><a href="#">Programs & Services</a></li>
							<li><a href="faq.html">FAQ</a></li>
						</ul>
				
				<div class="social">
					<div class="bar">
						<div class="bar-wrap">
							<div class="social">
								<a href="#" class="fb">
									<span data-icon="f" class="icon"></span>
								</a>
								<a href="#" class="tw">
									<span data-icon="T" class="icon"></span>
								</a>
								<a href="#" class="rss">
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

	</body>
</html>