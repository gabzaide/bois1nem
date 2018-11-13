<?php 
	session_start();
	include('connection.php');
	
if (isset($_POST["login"])) {
		$accountnumber = $_POST['accountnumber'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM customer WHERE accountnumber = '$accountnumber' and password = '$password'";
		$sql = mysqli_query($con , $sql);
		if (mysqli_num_rows($sql) !=1) {
			$_SESSION['userlogged'] = $accountnumber;
			header("location:user.php.");
		}
		else {
			echo "<script>
				alert('Account Doesn't Exist!!!');
			</script>";
		}

	}
 ?>