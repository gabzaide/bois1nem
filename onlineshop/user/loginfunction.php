<?php 
	session_start();
	include('connection.php');
	
if (isset($_POST["login"])) {
		$emailaddress = $_POST['emailaddress'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM customer WHERE emailaddress = '$emailaddress' and password = '$password'";
		$sql = mysqli_query($con , $sql);
		if (mysqli_num_rows($sql) !=1) {
			$_SESSION['userlogged'] = $emailaddress;
			header("location:user.php.");
		}
		else {
			echo "Account Doesn't Exist!";
		}
	}
 ?>