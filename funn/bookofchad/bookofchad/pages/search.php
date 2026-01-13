<?php
	$page = "Search Results";
	include "../includes/connect.php";
	include "../includes/header.php";
	include "../includes/sidebar.php";
?>

<div id="content">

	<h3 id="pink">Search Results</h3>
	
	<?php
		$term = mysqli_real_escape_string($con, $_GET['search']); //prevent SQL injection
		
		$sql = "SELECT * FROM product WHERE title LIKE '%$term%' OR desc1 LIKE '%$term%' OR desc2 LIKE '%$term%'"; //use LIKE to find values that match the term entered and order by date from the most recent review
		$product = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
		$num_product = mysqli_num_rows($product); //count the number of rows returned
		
		$sql = "SELECT * FROM blog WHERE title LIKE '%$term%' OR content LIKE '%$term%'";
		$blog = mysqli_query($con, $sql) or die(mysqli_error($con));
		$num_blog = mysqli_num_rows($blog);
		
		$num_total = $num_product + $num_blog;
		
		if(empty($_GET['search'])) //display if no search term entered
		{
			echo "<p><em>No search term entered</em></p>";
		}
		elseif($num_product == 0 && $num_blog == 0) //display if no matches to search
		{
			echo "<p><em>No results match your search for <strong>" . $term . "</strong></em></p>";
		}
		else
		{
			if($num_total == 1)
			{
				echo "<p><em>Your search for <strong>" . $term . "</strong> has yielded " . $num_total . " result.</em></p>";
			}
			else
			{
			echo "<p><em>Your search for <strong>" . $term . "</strong> has yielded " . $num_total . " results.</em></p>"; //display the search results
			}
				while ($row = mysqli_fetch_array($product)) //loop through results for each match
				{
					echo "<div id='searchResultsProduct'>";
					if((is_null($row['image2'])) || (empty($row['image2']))) //if the image field is NULL or empty
					{
						echo "";
					}
					else
					{
						echo "<div id='left'> <a href='game.php?productID=" . $row['productID'] . "'> <img src='../images/" . $row['image2'] . "' />" . "</a></div>";
					}
					echo "<div id='right'><h4><a href='game.php?productID=" . $row['productID'] . "'>" . $row['title'] . "</a></h4>";
					
					echo "<p>" . (substr(($row['desc1']),0,150)) . "..." . "</p><br /></div></div>"; //limit displayed characters to 100
				}
				while ($row = mysqli_fetch_array($blog))
				{
					echo "<div id='searchResultsBlog'>";
					echo "<h4><a href='home.php'>" . $row['title'] . "</a></h4>";
					echo (substr(($row['content']),0,200)) . "...";
					echo "</div>";
				}
		}

	?>
</div>
</div>

<?php
	include "../includes/footer.php";
?>