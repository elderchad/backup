<?php
	$con = mysqli_connect("localhost", "illumina_bigz", "Pogos2206!", "illumina_bigz"); //check the connection and, if broken, display an error message
		if (mysqli_connect_errno($con))
		{
				echo "Unable to connect to the server: " . mysqli_connect_error();
				exit();
		}
?>