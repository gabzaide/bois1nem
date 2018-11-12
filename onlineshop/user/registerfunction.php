<?php 
	include('connection.php');
	if (isset($_POST['register'])) { 
		$status = $_POST['status'];
		$studentno = $_POST['studentno'];
		$course = $_POST['course'];
		$branch = $_POST['branch'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$religion = $_POST['religion'];
		$citizen = $_POST['citizen'];
		$civil = $_POST['civil'];
		$dateofbirth = $_POST['dateofbirth']; 
		$placeofbirth = $_POST['placeofbirth'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$emailaddress = $_POST['emailaddress'];

		$sql = mysqli_query($con,"INSERT INTO students (status,studentno,password,course,branch,firstname,middlename,familyname,age,gender,religion,citizenship,civilstatus,dateofbirth,placeofbirth,contactno,address,emailaddress) 
			values ('".$status."','".$studentno."','".$password."','".$course."','".$branch."','".$firstname."','".$middlename."','".$lastname."','".$age."','".$gender."','".$religion."','".$citizen."','".$civil."','".$dateofbirth."','".$placeofbirth."','".$contact."','".$address."','".$emailaddress."')"); 
			
			mysqli_query($con , $sql);
			
			echo "<script>
				alert(' Successfully Registered!!!');
			</script>";
		
	}
 ?>

