<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "testk";

$roll = $_POST['roll'];
$_SESSION['roll'] = $roll;
$pword = $_POST['pass'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$nv_query = mysqli_query($conn, "select * from `student` where roll = '$roll' and pw = '$pword' and voted = 'N' ");
$v_query = mysqli_query($conn, "select * from `student` where roll = '$roll' and pw = '$pword' and voted = 'Y' ");
if(mysqli_num_rows($nv_query) > 0)
{
	$_SESSION['status']="Active";
	echo "	<script>alert('Login successful! vote wisely');
				document.location='vote.html'</script>";
}
else if(mysqli_num_rows($v_query) > 0)
{
	echo "<script>alert('Login successful!');document.location='voted.html'</script>";
}
else
{
	echo "<script>alert('Roll number or password wrong, check credentials again');document.location='login.html'</script>";
}

mysqli_close($con);

?>