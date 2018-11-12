	<!-- ========= UPDATE COURSES FUNCTION =========== -->
<?php
	if(isset($_POST['btn_pen']))
	{
	    $studentid =  $_POST['studentid'];
	    $status = $_POST['status'];

	    $query = mysqli_query($con,"UPDATE courses SET status = '".$status."' where studentid = '".$studentid."' ");

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
