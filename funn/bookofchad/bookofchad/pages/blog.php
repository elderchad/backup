<?php
	$page = "Blog";
	include "../includes/connect.php";
	include "../includes/header.php";
	include "../includes/sidebar.php";
?>

<div id="content">

<?php
	$sql = "SELECT * FROM blog RIGHT JOIN admin ON blog.adminID = admin.adminID LIMIT 0,5";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
		while ($row = mysqli_fetch_array($result))
		{
			echo "<div id='news'>";
			if((is_null($row['image'])) || (empty($row['image']))) //if the state field is NULL or empty
				{
					echo "";
				}
				else
				{
					echo "<div id='chadgasm'><img src='../images/" . $row['image'] . "' /></div>";
				}
			echo "<h4>" . $row['title'] . "</h4>";
			echo "<p>" . $row['content'] . "</p>";
			echo "<div id='date'>Posted on " . $row['dateTime'] . " by " . $row['username'] . "</div>";
			echo "</div>";
		}
		// echo "<br />";
?>

</div>


<?php
	include "../includes/footer.php";
?>