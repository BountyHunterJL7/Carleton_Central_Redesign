<?php
	/*
	 * File: 	server.php
	 *
	 * Author:	Brandon White (brandonwhite@cmail.com)
	 * Date: 	Winter 2020
	 * Course:	Design Studio I
	 * 
	 * Summmary of File:
	 *
	 *	Contains anything we want hidden for the most part,
	 * 	like connection or logging in. 
	*/
	
	/*** CONNECTION ***/
	
		// Definitions so this doesn't change.
		DEFINE ('DB_USER', 'tomasbabkinedica');
		DEFINE ('DB_PASS', 'YemPPA3V1Z');
		DEFINE ('DB_HOST', 'ugrad.bitdegree.ca');
		DEFINE ('DB_NAME', 'tomasbabkinedica');
		
		// Create connection.
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		
		// Connection check method 1
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
	/*** ERRORS ***/
	

		$errors = array();
		require_once('errors.php');
	
	
	/*** SESSION ***/
	
		if (!isset($_SESSION)) {
			session_start();
		}
		

	/*** LOGIN ***/
	
		// When user submits login info.
		if (isset($_POST['login_user']))
		{
			$_SESSION['login'] = 1;
			
			// Get info from forms and trim white space, then save as variables.
			// I realize there is no encryption.
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
		
			// If no errors.
			if (count($errors) == 0) {
				
				// Select user info from server. 
				$query = "SELECT * FROM StudentInfo WHERE Username='$username' AND Password='$password'";
				
				$result = $conn->query($query);
				
				if($result->num_rows == 1) 
				{
				// Load user from server, send to home page
					
					while ($row = $result->fetch_assoc()){
						$_SESSION['id'] = $row['Student_ID'];
						$_SESSION['fname'] = $row['FirstName'];
						$_SESSION['lname'] = $row['LastName'];
						$_SESSION['dob'] = $row['DateOfBirth'];
						$_SESSION['address'] = $row['Address'];
						$_SESSION['email'] = $row['EmailAddress'];
						$_SESSION['due'] = $row['AmountDue'];
						$_SESSION['phone'] = $row['PhoneNumber'];
						$_SESSION['emergency'] = $row['EmergencyContact_ID'];
						$_SESSION['coursesid'] = $row['CourseList_ID'];
						$_SESSION['res'] = $row['Residency_ID'];
						$_SESSION['user'] = $row['Username'];
						$_SESSION['pass'] = $row['Password'];
						
					}
				header('location: home/home.php');
				}
			}
		}
?>