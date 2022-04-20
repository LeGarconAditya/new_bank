<?php

	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "banksysphp";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		die("Could not connect to the database due to the following error --> " . $conn->connect_error);
	}

?>