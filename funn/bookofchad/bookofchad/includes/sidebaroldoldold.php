<div id="sidebar">
	<div id="shoppingCart">
			<h3>Your Cart&nbsp;<img src="../images/storeIcon3.png"></h3>
			<?php
				if(isset($_SESSION['cart']))
				{
					$max=count($_SESSION['cart']);
					for($i=0;$i<$max;$i++) //for each product in the cart get the following
					{
						$pid=$_SESSION['cart'][$i]['productID'];
						$q=$_SESSION['cart'][$i]['qty'];
						$pname=get_product_name($pid);
						$picon=get_icon($pid);
						$total_items=get_total_items($pid);
						if($q==0) continue;
			?>
				<?php
					if($total_items==1)
					{
						echo "<p>There is <strong>" . $total_items . "</strong> item in it.</p><br />";
						break;
					}
					elseif($total_items>1)
					{
						echo "<p>There are <strong>" . $total_items . "</strong> items in it.</p><br />";
						break;
					}
					}
				}
				else
				{
					echo "<p>It's empty.</p>";
					echo "<p>Now why is that?</p>";
				}
				?>
			<input type="button" value="View Cart" onclick="window.location='shoppingcart.php'">
	</div>
<?php
	if($page=='Demo')
	{
		echo "<h4>Walk left to get to the Temple</h4>
		<p>*Please note that this game contains adult content, and if you are under 18, or are easily offended, please take this opportunity to walk away right now.  No hard feelings.</p>
		<p>**This is just a sampler.  Not all functionality or design is included.</p>";
	}
	elseif($page=='Games' || $page=='Game')
	{
		echo "<h4>Currently Out:</h4>";
		echo "<p>2014 - ChadGasm</p>";
		echo "<p>2014 - ChadGasm II</p>";
		echo "<h4>Our Future Goals:</h4>";
		echo "<p>ChadGasm III</p>";
		echo "<p>Ultra Guy</p>";
		echo "<p>SpeedRun: Empty Handed</p>";
		echo "<p>CircleLand</p>";
	}
	elseif($page=='Tunes')
	{
		
		
		echo "</p>";
		echo "<div style='text-align: center; font-family: georgia, serif;'><p><div style='width: 158px; height: 200px; background-color: rgb(62,88,79); color: rgb(207,181,122); text-align: center;'>&nbsp;
	<div style='width: 149px; height: 188px; bottom: 15px; left: 4px; position: relative; border: 1px solid rgb(207,181,122); line-height: 15px;'>
	<p style='margin-top: 20px; font-size: 1.5em;'>
	HYMNS<br /><img src='../images/hymnLogo.png' style='top: 7px; position: relative;' />
	</p>
	</div>
	
	</div></p></div>";
	}
	elseif($page=='Art')
	{
		echo "<h4 style='text-align: center'>Chester<br />The world's -ONLY- pixelator.</h4>";
		echo "<p>He has long been interested in drawing in mspaint.  He has long been a paint enthusiast.  He has long been ridiculed for not using more 'modern' forms of digital art.  He has long not cared.</p>";
	}/*
	elseif($page=='History')
	{
		echo "<div style='text-align: center; font-family: georgia, serif;'><p><div style='width: 158px; height: 200px; background-color: rgb(8,42,71); color: rgb(207,181,122); text-align: center;'>&nbsp;
		
	<div style='width: 100px; height: 65px; left: 28px; top: 5px; position: relative; border-top: 1px solid rgb(207,181,122); border-bottom: 1px solid rgb(207,181,122); line-height: 15px;'>
	<p style='margin: 3px;'>
	THE<br />BOOK<br />OF<br />CHAD
	</p>
	</div>
	<p style='font-size: 0.45em; line-height: 8px; top: 10px; position: relative; letter-spacing: 0.40px;'>THE WORLD'S<br />-ONLY-<br />TESTAMENT OF<br />JESUS CHRIST</p>
	</div></p></div>";
	}*/
	elseif($page=='Store')
	{
		echo "<div style='text-align: center; font-family: georgia, serif; letter-spacing: 0.5px;'><p>WELCOME TO<br />SM<span style='color: rgb(251, 0, 125);'>IT</span>TY<br />CREEK<br />CENTER</p></div>";
	}
	else
	{
		echo "<h3>Recent Posts</h3>";
		$sql = "SELECT * FROM blog ORDER BY dateTime DESC";
		$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
		$row = mysqli_fetch_array($result);
		while ($row = mysqli_fetch_array($result))
		{
		echo "<p><a href='home.php'>" . $row['title'] . "</a></p>";
		}
	}
?>
	

	<div id="social">
	<!--
		<a href="#"><div id="facebook">&nbsp;</div></a>
		<a href="#"><div id="googlePlus">&nbsp;</div></a>
		<a href="#"><div id="twitter">&nbsp;</div></a>
		<a href="#"><div id="reddit">&nbsp;</div></a>
		<a href="#"><div id="mail"></div></a>
		-->
		<span class='deseret'><p style='font-size: 2em; text-align: center; bottom: 16px; position: relative;'>hOlEnes tU T lQrd</p></span>
	</div>

<div id="bannerbottom"><img src="../images/bannerBottom.png"></div>
</div>



<!-- echo "<p>In a world where Mormonism actually exists, these songs bring joy and invite the Holy Ghost to the dinner table. But since Mormonism doesn't exist, these tracks have become the soundtrack to the world's -ONLY- video game.</p>";-->