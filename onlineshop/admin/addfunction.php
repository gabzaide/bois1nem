
<!-- =========  ADD MODAL PENDING ACCOUNTS  ============== -->
<?php
	if(isset($_POST['add_admin_profiling'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$familyname = $_POST['familyname'];
		$emailaddress = $_POST['emailaddress'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$status = $_POST['status'];

		$chk = mysqli_query($con,"SELECT * from admin where firstname = '$firstname',middlename = '$middlename',familyname = '$familyname',emailaddress = '$emailaddress',username = '$username',password = '$password' and status = '$status' ");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO admin (firstname,middlename,familyname,emailaddress,username,password,status) 
				values ('".$firstname."','".$middlename."','".$familyname."','".$emailaddress."','".$username."','".$password."','".$status."')"); 
			if($query == true){
	            $_SESSION['added'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
			}
		}
		else{
			$_SESSION['duplicate'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>
<!-- =========  ADD MODAL PENDING STUUDENTS  ============== -->
<?php
	if(isset($_POST['add_student_profiling'])){
		$studentno = $_POST['studentno'];
		$password = $_POST['password'];
		$course = $_POST['course'];
		$branch = $_POST['branch'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$familyname = $_POST['familyname'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$religion = $_POST['religion'];
		$citizenship = $_POST['citizenship'];
		$civilstatus = $_POST['civilstatus'];
		$dateofbirth = $_POST['dateofbirth'];
		$placeofbirth = $_POST['placeofbirth'];
		$contactno = $_POST['contactno'];
		$address = $_POST['address'];
		$emailaddress = $_POST['emailaddress'];
		$status = $_POST['status'];


		$chk = mysqli_query($con,"SELECT * from students where studentno = '$studentno',password = '$password',course = '$course',branch = '$branch',firstname = '$firstname',middlename = '$middlename',familyname = '$familyname',age = '$age',gender = '$gender',religion = '$'religion,citizenship = '$citizenship',civilstatus = '$civilstatus',dateofbirth = '$dateofbirth',placeofbirth = '$placeofbirth',contactno = '$contactno',address = '$address', emailaddress = '$emailaddress', and status = '$status' ");
		$ct = mysqli_num_rows($chk);
		
		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO students (studentno,password,course,branch,firstname,middlename,familyname,age,gender,religion,citizenship,civilstatus,dateofbirth,placeofbirth,contactno,address,emaiaddress,status) 
				values ('".$studentno."','".$password."','".$course."','".$branch."','".$firstname."','".$middlename."','".$familyname."','".$age."','".$gender."','".$religion."','".$citizenship."','".$civilstatus."','".$dateofbirth."','".$placeofbirth."','".$contactno."','".$address."','".$emailaddress."','".$status."')"); 
			if($query == true){
	            $_SESSION['added'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
			}
		}
		else{
			$_SESSION['duplicate'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>


<!-- =========  ADD MODAL COUURSE  ============== -->
<?php
	if(isset($_POST['add_course'])){
		$coursenumber = $_POST['coursenumber'];
		$coursename = $_POST['coursename'];
		$courseobjective = $_POST['courseobjective'];
		$coursedescription = $_POST['coursedescription'];
		$coursemode = $_POST['coursemode'];
		$courseduration = $_POST['courseduration'];

		$chk = mysqli_query($con,"SELECT * from courses where coursenumber = '$coursenumber',coursename = '$coursename',courseobjective = '$courseobjective',coursedescription = '$coursedescription',coursemode = '$coursemode' and courseduration = '$courseduration' ");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO courses (coursenumber,coursename,courseobjective,coursedescription,coursemode,courseduration) 
				values ('".$coursenumber."','".$coursename."','".$courseobjective."','".$coursedescription."','".$coursemode."','".$courseduration."')"); 
			if($query == true){
	            $_SESSION['added'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
			}
		}
		else{
			$_SESSION['duplicate'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>

<!-- =========  ADD MODAL RESULTS  ============== -->
<?php
	if(isset($_POST['add_exam_result'])){
		$studentnumber = $_POST['studentnumber'];
		$studentname = $_POST['studentname'];
		$coursetaken = $_POST['coursetaken'];
		$branch = $_POST['branch'];
		$coursemode = $_POST['coursemode'];
		$courseduration = $_POST['courseduration'];
		$dateposted = $_POST['dateposted'];
		$result = $_POST['result'];

		$chk = mysqli_query($con,"SELECT * from results where studentnumber = '$studentnumber',studentname = '$studentname',coursetaken = '$coursetaken',branch = '$branch',coursemode = '$coursemode',courseduration = '$courseduration', dateposted = '$dateposted' and result = '$result'");
		$ct = mysqli_num_rows($chk);	
		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO results (studentnumber,studentname,coursetaken,branch,coursemode,courseduration,dateposted,result) 
				values ('".$studentnumber."','".$studentname."','".$coursetaken."','".$branch."','".$coursemode."','".$courseduration."','".$dateposted."','".$result."')"); 
			if($query == true){
	            $_SESSION['added'] = 1;
	            header ("location: ".$_SERVER['REQUEST_URI']);
			}
		}
		else{
			$_SESSION['duplicate'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>



