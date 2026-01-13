<?php
	session_start();
	include "../includes/connect.php";
?>

<?php
	$blogID = mysqli_real_escape_string($con, $_GET['blogID']); //prevents SQL injection :D
	$title = $_POST['title']; //retrieve the reviewID from the hidden form field
	$content = $_POST['content']; //retrieve the memberID from the $_SESSION created when the user logged in
	$adminID = $_SESSION['userID'];
	
	$sql = "UPDATE blog SET title = '$title', content = '$content' WHERE blogID='$blogID'"; //(title, content) VALUES ('$title', '$content')";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //run the query
	
	//user messages
	if($result)
	{
		$_SESSION['success'] = 'Post edited successfully'; //register a session with a success message
		header("location:postedit.php?blogID=" . $blogID); //redirect to the full review page with the appropriate reviewID
	}
	else
	{
		$_SESSION['error'] = 'An error has prevented the post from being edited.'; //register a session with an error message
		header("location:postedit.php?blogID==" . $blogID); //redirect to the full review page with the appropriate reviewID
	}
?>