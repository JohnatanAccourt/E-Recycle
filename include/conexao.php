<?php 
//Changing name of servernome
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ERECYCLE";
	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn, 'utf8');
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
