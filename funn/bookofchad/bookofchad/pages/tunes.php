<?php
	$page = "Tunes";
	include "../includes/connect.php";
	include "../includes/header.php";
	include "../includes/sidebar.php";
?>









<div id="content">

	<div id="tunesLeft">
	<!--<div id="left"><img src="../images/screenshotLeft.png" alt='sprite' /></div>-->
	
	
<ul>
<li style='font-size: 1.8em; padding-bottom: 5px;'>Originals</li>
<?php
	$sql = "SELECT * FROM tunes WHERE category='original' ORDER BY title ASC";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
	$row = mysqli_fetch_array($result);
	
	while ($row = mysqli_fetch_array($result))
	{
		echo "<li>" . $row['title'] . "<audio style='bottom: 4px; position: relative;' controls preload='none'>";
		echo "<source src='../media/" . $row['file'] . "' type='audio/ogg'><br />";
		echo "</audio><br /></li>";
	}
?>
<li style='font-size: 1.8em; padding-top: 15px; padding-bottom: 5px;'>Children's Songbook</li>
<?php
	$sql = "SELECT * FROM tunes WHERE category='child' ORDER BY title ASC";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
	$row = mysqli_fetch_array($result);
	
	while ($row = mysqli_fetch_array($result))
	{
		echo "<li>" . $row['title'] . "<audio style='bottom: 4px; position: relative;' controls preload='none'>";
		echo "<source src='../media/" . $row['file'] . "' type='audio/ogg'><br />";
		echo "</audio><br /></li>";
	}
?>
<li style='font-size: 1.8em; padding-top: 15px; padding-bottom: 5px;'>Hymns</li>
<?php
	$sql = "SELECT * FROM tunes WHERE category='hymn' ORDER BY title ASC";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
	$row = mysqli_fetch_array($result);
	
	while ($row = mysqli_fetch_array($result))
	{
		echo "<li>" . $row['title'] . "<audio style='bottom: 4px; position: relative;' controls preload='none'>";
		echo "<source src='../media/" . $row['file'] . "' type='audio/ogg'><br />";
		echo "</audio><br /></li>";
	}
?>
</ul>
	</div>
	<!--<div id="tunesRight">
	<img src="../images/screenshot.png" alt='sprite' />
	</div>-->
	
	<!--<div style='width: 100%; border: 1px solid black;'>
	<div style='width: 27%; float: left; border: 1px solid black;'><img src="../images/screenshotLeft.png" alt='sprite' /></div>
	
	<div style='width: 27%; float: right; border: 1px solid black;'><img src="../images/screenshot.png" alt='sprite' /></div>
	</div>-->
	
</div>

<?php
	include "../includes/footer.php";
?>

<!--<p>The World's -ONLY- Soundtrack largely provided by the LDS church</p>-->