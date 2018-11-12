<?php 
	include('connection.php');
	$annsql = "SELECT * FROM results";
	$annquery = mysqli_query($con , $annsql);
	while ($row = mysqli_fetch_assoc($annquery)) {
		echo "<div class='ann-list'>
			<p class='ann-title'>".$row['coursetaken']."</p>
			<p class='ann-content'>".$row['result']."</p>
			<p class='ann-date'>~".$row['dateposted']."</p>
		</div>";
	}
 ?>