<?php 
	session_start();
	include('connection.php');
	
if (isset($_POST["login"])) {
		$username = $_POST['emailaddress'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
		$sql = mysqli_query($con , $sql);
		if (mysqli_num_rows($sql) !=0) {
			$_SESSION['adminlogged'] = $username;
			header("location:index.php.");
		}
		else {
			echo "Account Doesn't Exist!";
		}
	}
 ?>