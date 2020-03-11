<?php
	unset($_SESSION['status']);
	session_destroy();
	echo "<script>alert('Logged out');document.location='login.html'</script>";
?>