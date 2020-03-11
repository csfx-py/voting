<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:login.html");
}

$servername = "localhost";
$username = "root";
$password = "";
$db = "testk";

$roll = $_SESSION['roll'];
$vcan = $_POST['choice'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$query = "UPDATE `votecount` SET `v`='$vcan' WHERE `r`='$roll'";
if(mysqli_query($conn,$query))
{
	$y_query = "UPDATE `student` SET `voted` = 'Y' WHERE `student`.`roll` = '$roll';";
	mysqli_query($conn,$y_query);
	echo "<script>alert('Thanks for voting!');document.location='voted.html'</script>";
}
else
{
	echo "<script>alert('vote failed');document.location='vote.html'</script>";
}

mysqli_close($con);

?>