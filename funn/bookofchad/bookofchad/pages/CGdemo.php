<?php
	$page = "Demo";
	include "../includes/connect.php";
	include "../includes/header.php";
?>

<div id="content">
	<br />
	<div id="tv"><object width="905" height="538" data="../media/ChadGasm07-16-14.swf"></object><img src="../images/soiLogo.png"></div>
	<div id="stand"><img src="../images/tvStand.png"></div>
	
	<h2>[Controls]</h2>
		<table id="tableLeft">
		<tr>
		<td><h4>Move Left</h4></td>
		<td><img src='../images/left.png'></td>
		</tr>
		<tr>
		<td><h4>Move Right</h4></td>
		<td><img src='../images/right.png'></td>
		</tr>
		<tr>
		<td><h4>Duck</h4></td>
		<td><img src='../images/down.png'></td>
		</tr>
		<tr>
		<td><h4>Crouch</h4></td>
		<td><img src='../images/up.png'></td>
		</tr>
		<tr>
		<td><h4>Enter Door</h4></td>
		<td><img src='../images/space.png'></td>
		</tr>
		</table>
		<table id="tableRight">
		<tr>
		<td><h4>Jump</h4></td>
		<td><img src='../images/z.png'></td>
		</tr>
		<tr>
		<td><h4>Sword of Laban</h4></td>
		<td><img src='../images/x.png'></td>
		</tr>
		<tr>
		<td><h4>Sunstone</h4></td>
		<td><img src='../images/c.png'></td>
		</tr>
		<tr>
		<td><h4>Joe's Handgun</h4></td>
		<td><img src='../images/v.png'></td>
		</table>
	
</div> <!-- end content -->

<?php
	include "../includes/footer.php";
?>