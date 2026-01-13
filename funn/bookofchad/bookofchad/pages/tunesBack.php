<?php
	$page = "Tunes";
	include "../includes/connect.php";
	include "../includes/header.php";
	include "../includes/sidebar.php";
?>

<div id="content">

	<div id="tunesLeft">
	<div id="left"><img src="../images/screenshotLeft.png" alt='sprite' /></div>
	<p><img src="../images/chadGasm.png" alt='logo' /></p><h3 class="right">Original<br /> SoundTrack</h3>
	<h2><a href="#">By Boshig</a></h2>
<ul>
<?php
	$sql = "SELECT * FROM tunes ORDER BY category ASC";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
	$row = mysqli_fetch_array($result);
	
	while ($row = mysqli_fetch_array($result))
	{
		echo "<li>" . $row['title'] . "<audio controls preload='none'>";
		echo "<source src='../media/" . $row['file'] . "' type='audio/ogg'><br />";
		echo "</audio><br /></li>";
	}
?>
</ul>
	</div>
	<div id="tunesRight">
	<img src="../images/screenshot.png" alt='sprite' />
	</div>
</div>

<?php
	include "../includes/footer.php";
?>

##<p>The World's -ONLY- Soundtrack largely provided by the LDS church</p>