<?php
	/*
	
		FILE: server.php 
		AUTHOR: Brandon 
	
		PURPOSE: Connects to database and handles
		actions sent by other PHP files.
		
		NOTE: Yes we are open to SQL injection and yes much of this isn't the correct way to do this
		but it's the only way that works for us with how the ugrad server is set up.
	
		TABLE OF CONTENTS (CTRL+F to jump):
		1. Connect to database
		2. Display errors
		3. Session handling
		
	*/
	
	// ************************************v 1. CONNECT TO DATABASE v************************************

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

	// ************************************^ 1. CONNECT TO DATABASE ^************************************
	// require_once('connection.php');
	
	
	
	// ************************************v 2. DISPLAY ERRORS v************************************
	
		// This was the method we were shown in MDM... there are other ways that I will explore. 
		$errors = array();
		require_once('errors.php');
	
	// ************************************^ 2. DISPLAY ERRORS ^************************************
	
	
	
	// ************************************v 3. SESSION HANDLING v************************************
	
		// Set session, if not already. 
		if (!isset($_SESSION)) 
		{
			header('location: ../index.php');
		}
	 
	// ************************************^ 3. SESSION HANDLING ^************************************
	
	
	
	// ************************************v 4. LOGIN v************************************
	
	/*
		TODO: "Remember me" should do something. "Forgot password" should do something. 
	*/
	
	// When user submits login info.
	if (isset($_POST['login_user']))
	{
		session_start();
		
		// Get info from forms and trim white space, then save as variables.
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
			$_SESSION['login'] = 1;
			header('location: home/home.php');
			}
		}
	}
	// ************************************^ 4. LOGIN ^************************************
	
	
	// ************************************v 5. PERSONAL INFO v************************************
	
	/**********************************	
		HOME.PHP
		
		TODO:
		+	Add Google Calendar?
		+	Student quick info on side
			+ 	Placeholder image, name, number,
				Cmail, Quicklinks(?)
		+ 	Middle panels
			+ 	Generate timetable from DB, add link to it
			+	Academic progress display grades? plus link
			+ 	Amount to pay hidden by default, button to unhide
				plus link
		+	News: 
			+ 	populate with static fake articles or 
			articles in db?
	***********************************/
	
	/**********************************	
		PERSONALINFO.PHP
		EDITPERSONALINFO.PHP
		EDITINFO.PHP
	***********************************/
	
	/**********************************	
		STUDENTRECORDS.PHP
	***********************************/
	
	/**********************************	
		REGISTRATION.PHP
	***********************************/
	
	/**********************************	
		AWARDS.PHP
	***********************************/
	
	/**********************************	
		HOUSING.PHP
	***********************************/
	
	/**********************************	
		NOT INCLUDED
		
		MYSUCCESS.HTML
		TERMS-CONDITIONS.HTML
	***********************************/
	
	// Close connection.
	//$conn->close();
?>