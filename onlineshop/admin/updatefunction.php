
	<!-- ========= UPDATE COURSES FUNCTION =========== -->
<?php
	if(isset($_POST['update_admin_profiling']))
	{
	    $adminid = $_POST['adminid'];
	    $firstname = $_POST['firstname'];
	    $middlename = $_POST['middlename'];
	    $familyname = $_POST['familyname'];
	    $emailaddress = $_POST['emailaddress'];
	    $username = $_POST['username'];
	    $password = $_POST['password'];
	    $status = $_POST['status'];

	    $query = mysqli_query($con,"UPDATE admin SET firstname = '".$firstname."', middlename = '".$middlename."', familyname = '".$familyname."', emailaddress = '".$emailaddress."', username = '".$username."', password = '".$password."', status = '".$status."'  where firstname = '".$firstname."' ");

	    if($query == true){
	        $_SESSION['update'] = 1;
	        header("location: ".$_SERVER['REQUEST_URI']);
	    }

		if(mysqli_error($con)){
			$_SESSION['duplicate'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>


	<!-- ========= UPDATE COURSES FUNCTION =========== -->
<?php
	if(isset($_POST['update_course']))
	{
	    $courseid = $_POST['courseid'];
	    $coursenumber = $_POST['coursenumber'];
	    $coursename = $_POST['coursename'];
	    $courseobjective = $_POST['courseobjective'];
	    $coursedescription = $_POST['coursedescription'];
	    $coursemode = $_POST['coursemode'];
	    $courseduration = $_POST['courseduration'];

	    $query = mysqli_query($con,"UPDATE courses SET coursenumber = '".$coursenumber."', coursename = '".$coursename."', courseobjective = '".$courseobjective."', coursedescription = '".$coursedescription."', coursemode = '".$coursemode."', courseduration = '".$courseduration."'  where courseid = '".$courseid."' ");

	    if($query == true){
	        $_SESSION['update'] = 1;
	        header("location: ".$_SERVER['REQUEST_URI']);
	    }

		if(mysqli_error($con)){
			$_SESSION['duplicate'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>


	<!-- ========= UPDATE COURSES FUNCTION =========== -->
<?php
	if(isset($_POST['update_exam_result']))
	{
	    $studentnumber = $_POST['resultid'];		
	    $studentnumber = $_POST['studentnumber'];
	    $studentname = $_POST['studentname'];
	    $coursetaken = $_POST['coursetaken'];
	    $branch = $_POST['branch'];
	    $coursemode = $_POST['coursemode'];
	    $courseduration = $_POST['courseduration'];
	    $dateposted = $_POST['dateposted'];
	    $result = $_POST['result'];

	    $query = mysqli_query($con,"UPDATE results SET studentnumber = '".$studentnumber."', studentname = '".$studentname."', coursetaken = '".$coursetaken."', branch = '".$branch."', coursemode = '".$coursemode."', courseduration = '".$courseduration."', dateposted = '".$dateposted."', result = '".$result."'  where resultid = '".$resultid."' ");

	    if($query == true){
	        $_SESSION['update'] = 1;
	        header("location: ".$_SERVER['REQUEST_URI']);
	    }

		if(mysqli_error($con)){
			$_SESSION['duplicate'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>
