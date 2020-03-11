<?php	
	/*
		This file connects to the database and checks the connection. It should be included in every php file. 
	*/

	// Definitions to keep login info unchanged

	DEFINE ('DB_USER', 'tomasbabkinedica');
	DEFINE ('DB_PASS', 'YemPPA3V1Z');
	DEFINE ('DB_HOST', 'ugrad.bitdegree.ca');
	DEFINE ('DB_NAME', 'tomasbabkinedica');
	
	// Now I want to make sure this connects to the server
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	// Check the connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>