<div id="footer"><p>Copyright 2014 &copy; <a href="home.php">The Big Leagues</a></p></div>
<div id="terms"><p><a href="terms.php">Terms</a>&nbsp; &nbsp; &nbsp;<a href="privacy.php">Privacy</a>&nbsp; &nbsp; &nbsp;<a href="security.php">Security</a>&nbsp; &nbsp; &nbsp;
<?php
	if(!isset($_SESSION['login']))
	{
		echo "<a href='adminLogin.php'>Administrator Login</a>";
	}
	else
	{
		echo "<a href='logout.php'>Administrator Logout</a>";
	}
?>
</p>
</div>
</body>
</html>