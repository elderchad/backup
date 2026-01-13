<?php
	$page = "Post Edit";
	include "../includes/connect.php";
	include "../includes/header.php";
	include "../includes/sidebar.php";
?>
<div id="content">
<h3>Edit Post</h3>
<?php
	$blog = mysqli_real_escape_string($con, $_GET['blogID']); //prevents SQL injection :D
	
	$sql = "SELECT * FROM blog RIGHT JOIN admin ON blog.adminID = admin.adminID WHERE blogID='$blog'";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
	$row = mysqli_fetch_array($result);
	
	$sql = "SELECT * FROM admin";
	$admin_result = mysqli_query($con, $sql) or die(mysqli_error($con));
	$admin_row = mysqli_fetch_assoc($admin_result);

			echo "<div id='news'>";
			if((is_null($row['image'])) || (empty($row['image']))) //if the state field is NULL or empty
				{
					echo "";
				}
				else
				{
					echo "<div id='chadgasm'><img src='../images/" . $row['image'] . "' /></div>";
				}
			echo "<form action='posteditprocess.php?blogID=" . $row['blogID'] . "' method='post'>";
			echo "<h4>Title</h4>";
			echo "<input style = 'width:50.5%' type='text' name='title' value ='" . $row['title'] . "' />";
			echo "<h4>Content</h4>";
			echo "<textarea rows='10' cols='39%' name='content'>" . $row['content'] . "</textarea>";
			echo "<div id='date'>Originally posted on " . $row['dateTime'] . " by " . $admin_row['username'] . "</div>";
			echo "<input style='left:18.5%;top:20px;position:relative' type='submit' value='Submit Edit'>";
			echo "</form>";
			echo "</div>";
?>
</div>
<?php
	include "../includes/footer.php";
?>