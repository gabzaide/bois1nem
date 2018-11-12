<?php 
	session_start();
	include('connection.php');
	
if (isset($_POST["login"])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM students WHERE username = '$username' and password = '$password'";
		$sql = mysqli_query($con , $sql);
		if (mysqli_num_rows($sql) !=1) {
			$_SESSION['userlogged'] = $username;
			header("location:user.php.");
		}
		else {
			echo "Account Doesn't Exist!";
		}
	}
 ?>