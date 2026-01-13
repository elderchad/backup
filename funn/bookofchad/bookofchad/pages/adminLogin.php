<?php
	$page = "Administrator Login";
	include "../includes/connect.php";
	include "../includes/header.php";
	include "../includes/sidebar.php";
?>

		<h5 style="text-align: center">Administrator Login<br /><br />Please enter your login credentials</h5>
		<div id="login">
		<form action="loginprocess.php" method="post" id="login">
			<label>Username*</label><input type="text" name="username" required /><br />
			<label>Password*</label><input type="password" name="password" required /><br /><br />
			<div id="button"><input type="submit" name="login" value="Login"/></div><br />
		</form>
		</div>
		<?php
	if(isset($_SESSION['error'])) //if there is an error in the session, display the error message
	{
		echo '<p class="error">' . $_SESSION['error'] . '</p>';
		unset($_SESSION['error']);
	}
?>

<?php
	if(isset($_SESSION['success'])) //if session success is set
	{
		echo '<p class="regSuccess">' . $_SESSION['success'] . '</p>'; //display successful registration msg
		unset($_SESSION['success']); //unset session error
	}
?>

<?php
	include "../includes/footer.php";
?>