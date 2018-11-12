<?php 

	if (!isset($_SESSION['userlogged'])) {
		header("location:logout.php");
	}
 ?>