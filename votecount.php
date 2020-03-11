<html>
<head>

<title>
</title>

<link rel="stylesheet" href="vote_style.css">

<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: #659dd5;
  text-align: right;
}
</style>

<div class="footer">
  <p> &copy; csfx &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
</div>

</head>

<body bgcolor="#343d46">

<center>

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "testk";


$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?> 
<table style="width:50%; height:20%">
	<tr>
		<th align = "left"><font color="fcb04e" face="Consolas">Candidate Roll number</font></th>
		<th align = "left"><font color="fcb04e" face="Consolas">Candidate Name</font></th>
		<th align = "left"><font color="fcb04e" face="Consolas">Vote Count</font></th>
	</tr>
	<tr>
		<td><font color="f35e64" face="Consolas">m0000000</font></td>
		<td><font color="99ca92" face="Consolas">csfx</font></td>
		<td><font color="659dd5" face="Consolas">
			<?php 
				$query = mysqli_query($conn, "SELECT * FROM votecount where v = '1'");
				echo mysqli_num_rows($query); 
			?>
		</font></td>
	</tr>
	<tr>
		<td><font color="f35e64" face="Consolas">m0000001</font></td>
		<td><font color="99ca92" face="Consolas">csfx1</font></td>
		<td><font color="659dd5" face="Consolas">
			<?php 
				$query = mysqli_query($conn, "SELECT * FROM votecount where v = '2'");
				echo mysqli_num_rows($query); 
			?>
		</font></td>
	</tr>
</table>

<?php

mysqli_close($conn);

?>

</center>

</body>

</html>