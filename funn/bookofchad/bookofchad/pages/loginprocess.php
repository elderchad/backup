<?php
	$_SESSION['login'] = $row['firstName'];
	//$_SESSION['userID'] = $row['userID'];
	session_start();
	include "../includes/connect.php";
?>

<?php
	$username = mysqli_real_escape_string($con, $_POST['username']); //prevents SQL injection :D
	$password = mysqli_real_escape_string($con, $_POST['password']); //prevents SQL injection :D
	
	$password = hash('sha256', $password);
	
	$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['login'] = '' . $row['username'];
		$_SESSION['userID'] = $row['adminID'];
		header('location:home.php'); //redirects to session1 page if successful
	}
	else
	{
		$_SESSION['error'] = "Incorrect Username or Password. Please try again.";
		header('location:adminLogin.php'); //redirects to login page if login is unsuccessful
	}
	mysqli_close($con);
?>