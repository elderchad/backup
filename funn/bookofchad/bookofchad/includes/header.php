<?php
	session_start();
	include "../includes/functions.php";
	
?>

<!doctype html>
<!-- Everything will eventually be transported to an include file, and all of the additional pages and the database will be made -->
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title><?php echo $page ?></title>
	<link rel="stylesheet" href="../css/styles.css">
	<script language="javascript" type="text/javascript" src="../js/audio.js"></script>
	<link href="../images/chadgasm/favicon.ico" rel="shortcut icon" />
	
	<meta name="author" content="Script Tutorials" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 
    <!-- add styles and scripts -->
	
    <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
	<style>
		mark {
			background-color: white;
			color:#4b545f;
		}
		mark:active {
			background-color: rgb(255, 242, 0);
			transform: rotate(7deg);
			-webkit-transform: rotate(7deg);
		}
		mark:active:after {
		    background-color: rgb(255, 242, 0);
			transform: rotate(7deg);
			-webkit-transform: rotate(7deg);
		}
		code {
			font-family: georgia, serif;
			font-size: 0.7em;
			bottom: 3px;
			position: relative;
			color: rgb(0, 64, 88);
			cursor: pointer;
			height: auto;
			width: auto;
		}
		p a code:hover {
			transform: rotate(7deg);
			-webkit-transform: rotate(7deg);
		}
		.spoiler {
			filter: blur(5px);
			transition-property: -webkit-filter;
			transition-duration: .4s;
		}
		.spoiler:hover, .spoiler:focus {
			filter: blur(0px);
		}
        @font-face {
            font-family: deseret;
            src: local("☺"),
                url("../includes/DESERET.TTF") format("truetype");
        }
        
        @font-face {
            font-family: deseret bold;
            font-weight: bold;
            src: local("☺"),
                url("../includes/DESERET.TTF") format("truetype");
        }
        .deseret {
            font-family: deseret;
        }
        
        @font-face {
            font-family: Reformed Egyptian;
            src: local("Reformed Egyptian"),
                url("../includes/ReformedEgyptian.ttf") format("truetype");
        }
        
        @font-face {
            font-family: Reformed Egyptian bold;
            font-weight: bold;
            src: local("Reformed Egyptian"),
                url("../includes/ReformedEgyptian.ttf") format("truetype");
        }
        .reformed {
            font-family: Reformed Egyptian;
        }
        
        .box {
            width: 10%;
            height: 50px;
            padding: 10px;
            padding-right: 10px;
            background-color: rgb(236,236,236);
            font-family: verdana;
            border-radius: 5px;
        }
        .box:hover {
            background-color: rgb(216,216,216);
        }
        .box:selected:after {
            color: rgb(0, 64, 88);
        }
        .
	</style>
</head>

<body>
    <?php include_once("analyticstracking.php") ?>
<?php
	
	if(isset($_SESSION['login']))
	{
		$username = $_SESSION['login'];
		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
		$row = mysqli_fetch_array($result);
		echo "<div id='welcome'><p>Welcome, " . $username . "</p>";
		echo "<a href='logout.php'>Logout</a></div>";
	}
?>
<div id="header" style="background-color: rgb(0, 64, 88); height: 80px;"><div id="logo"><a href="home.php"><!--<img src="../images/bigLeaguezLogo.png">--><img src="../images/chadgasm/book_of_chad_logo4.png" style="position: relative; bottom: 28px;"></a></div><!--<p style='float: right; position: relative; text-align: right; font-size: 0.8em;'>chadmin@bigleaguez.com
<br /><a href='http://nwobama.com'><img src='../images/faviconNWO.png' /></a>&nbsp;&nbsp;<a href='https://smittycreek.bigleaguez.com'><img src='../images/faviconSmitty.png' /></a>&nbsp;&nbsp;<a href='https://github.com/BigLeaguez/ChadGasm'><img src='../images/github.png' /></a></p>-->

</div>

	<!--<div id="search">
		
		<form action="search.php" method="get">
			<input type="text" name="search" placeholder="Shitdick Search&trade;" />
			<div id="searchSubmit"><input type="submit" name="submit" value="" /></div>
		</form>
	</div>-->

<div id="nav">
<nav>
	<ul>
		<li><a <?php if($page=='Home') {echo "class='homeActive'";} ?>href="home.php"><div id="home">Home</div></a></li>
		<li><a <?php if($page=='Tunes') {echo "class='tunesActive'";} ?>href="tunes.php"><div id="tunes">Tunes</div></a></li>
		<li><a <?php if($page=='Art') {echo "class='artActive'";} ?>href="art.php"><div id="art">Art</div></a></li>
		<li><a <?php if($page=='History') {echo "class='historyActive'";} ?>href="history_introduction.php"><div id="history">History</div></a></li>
	</ul>
</nav>

</div>