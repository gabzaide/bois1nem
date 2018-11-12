<?php 

	if (!isset($_SESSION['adminlogged'])) {
		header("location:logout.php");
	}
 ?>