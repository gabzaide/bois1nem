<?php 
	include('connection.php');
	if (isset($_POST['register'])) { 
		$accountnumber = $_POST['accountnumber'];
		$accounttype = $_POST['accounttype'];
		$emailaddress = $_POST['emailaddress'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$familyname = $_POST['familyname'];
		$mobilenumber = $_POST['mobilenumber'];
		$gender = $_POST['gender'];
		$dateofbirth = $_POST['dateofbirth'];
		$placeofbirth = $_POST['placeofbirth'];
		$address = $_POST['address'];

		$sql = mysqli_query($con,"INSERT INTO customer (accountnumber,accounttype,emailaddress,password,firstname,middlename,familyname,mobilenumber,gender,dateofbirth,placeofbirth,address) 
			values ('".$accountnumber."','".$accounttype."','".$emailaddress."','".$password."','".$firstname."','".$middlename."','".$familyname."','".$mobilenumber."','".$gender."','".$dateofbirth."','".$placeofbirth."','".$address."')"); 
		
			mysqli_query($con , $sql);
			
			echo "<script>
				alert(' Successfully Registered!!!');
			</script>";
		
	}
 ?>

