<?php
	/*
		This file handles actions sent by other php files.
	*/
	
	// Getting database connection. 
	require_once('connection.php');
	$errors = array();
	require_once('errors.php');
	
	// Set session, if not set already.
	// TODO:
	// If session is not set, return to home page.
	// Also maybe logout after 30 minutes of inactivity.
	if (!isset($_SESSION)) 
	{
		session_start();
	}
	
	// Variable declarations
	 
	
	/**********************************	
		LOGIN.PHP 
		
		TODO: 
		+ 	Would be nice to have an
			"Invalid Username/ Password"
			error pop up.
		+ 	Connection seems slow. Indication
			that it's actually loading might
			be nice.
		+ 	"Remember me" should do something.
		+	"Forgot password" should do something.
	***********************************/
	
	// When user submits login info.
	if (isset($_POST['login_user']))
	{
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
				
			header('location: home/home.php');
			}
		}
	}
	
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