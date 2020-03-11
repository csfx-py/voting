<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "testk";

$roll = $_POST['roll'];
$pword = $_POST['pass'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$query = mysqli_query($conn, "select * from `student` where roll = '$roll'");
if(mysqli_num_rows($query) > 0){
	echo "<script>alert('User already Exists, change roll number or login if registered');document.location='reg.html'</script>";
}
else
{
	$in_query = "INSERT INTO `student` (`roll`, `pw`, `voted`) VALUES ('$roll', '$pword', 'N')";
	mysqli_query($conn,$in_query);
	$v_query = "INSERT INTO `votecount` (`r`, `v`) VALUES ('$roll', '0')";
	mysqli_query($conn,$v_query);
	header("Location: login.html");
}

mysqli_close($con);

?>