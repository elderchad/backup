<?php
	session_start();
	session_destroy();
	header("location: home.php"); //redirect to home.php on logout
?>
