<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "projectweek";
	$conn = mysqli_connect($servername, $username, $password, $db);

	if (!$conn ) {
		die("connection_failed".mysqli_connect_error());
	}
	//echo "connection succesful!";
?>