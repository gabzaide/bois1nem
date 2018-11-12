<?php 
	include('connection.php');
	if (isset($_POST['register'])) {
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$familyname = $_POST['familyname'];
		$emailaddress = $_POST['emailaddress'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$status = $_POST['status'];
		
		$sql = "INSERT INTO admin (firstname , middlename , familyname , emailaddress , username , password , status) 
				VALUES ('$firstname' , '$middlename', '$familyname', '$emailaddress', '$username', '$password', '$status')";
			
			mysqli_query($con , $sql);
			
			echo "<script>
				alert(' Successfully Registered!!!');
			</script>";
		
	}
 ?>

