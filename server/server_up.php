<?php
	/*
	
		FILE: server.php 
		AUTHOR: Brandon 
	
		PURPOSE: Connects to database and handles
		actions sent by other PHP files.
	
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
		
		// Connection check method 2 (I'll see which is better)
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

	// ************************************^ 1. CONNECT TO DATABASE ^************************************
	
	
	
	// ************************************v 2. DISPLAY ERRORS v************************************
	
		// This was the method we were shown in MDM... there are other ways that I will explore. 
		$errors = array();
		require_once('errors.php');
	
	// ************************************^ 2. DISPLAY ERRORS ^************************************
	
	
	
	// ************************************v 3. SESSION HANDLING v************************************
	
		// Set session, if not already. 
		if (!isset($_SESSION)) 
		{
			session_start();
/**/		// This line might be an issue v
			$_SESSION['login'] = 0;
		}
		
		// If user is not logged in, redirect to login page. 
/**/	// This statement might be an issue v	
		if ($_SESSION['login'] = 0) {
			header('location: https://rad.bitdegree.ca/~brandonwhite/index.php');
		}
		
		// Bonus TODO: Log out after 30 minutes of inactivity.
	 
	// ************************************^ 3. SESSION HANDLING ^************************************
	
	
	
	// ************************************v 4. LOGIN v************************************
	
	/*
		TODO: "Remember me" should do something. "Forgot password" should do something. 
	*/
	
	// This occurs when the user submits their login info.
	if (isset($_POST['login_user'])) {
		
		// Biggest change here is that I am now using prepared statements to log the user in. 
		
		// Prepare statement.
		$stmt = $conn->prepare("SELECT * FROM StudentInfo WHERE Username = '?' AND Password = '?'");
		$stmt->bind_param('ss', $username, $password); 
		
		// Get info from forms and trim white space, then save as variables above.
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		// Execute statement
		$stmt->execute();
		
		// Get result
		$result = $stmt->get_result();
		
		// Now fetch associated rows from result and save as session variables
	
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
			// $_SESSION['pass'] = $row['Password'];
		}
		
		// Set user as logged in and send to the home page.
		$_SESSION['login'] = 1; 	
		header('location: home/home.php');	
	}
	
	// ************************************^ 4. LOGIN ^************************************
	
	
	// ************************************v 5. HOME v************************************
	
		// This will have to be copy-pasted into home.php and placed in the proper div. 
		/*
			<div>
				<!-- Name -->
					<input type="text" value="<?php
					echo $_SESSION['fname'] . " " . $_SESSION['lname'];
					?>" readonly><br><br>
				
				<!-- Student ID -->	
				<input type="text" value="<?php
				echo $_SESSION['id'];
				?>" readonly><br><br>	
					
				<!-- Email -->
				<input type="text" value="<?php
				echo $_SESSION['email'];
				?>" readonly><br><br>
			</div>
		*/
	
	// ************************************^ 5. HOME ^************************************
	
	
	
	// ************************************v 6. PERSONAL INFO v************************************
	
		// Updates to add to PERSONALINFO.PHP
		
			/*
				// Replace big section of PHP with this:
				
				<?php
					getEmergencyInfo();
				?>	
			*/
		
		// UPDATE EMERGENCY INFO
		if(isset($_POST['update_emergency'])) {
			$stmt = $conn->prepare("UPDATE EmergencyContact SET WHERE EmergencyContact_ID = ?" 
		}
		
		// UPDATE PERSONAL INFO
		if (isset($_POST['update_personal'])) {
			
			// Prepare statement
/**/		// Just realized, these might need to be strings instead of integers. We'll see.
			// My reasoning is that the posted values might be stored as strings 
			$stmt = $conn->prepare("UPDATE StudentInfo SET PhoneNumber = ?, Address = '?' WHERE Student_ID = ?");
			$stmt->bind_param('isi', $phone, $address, $id);
			
			// Set variables
			$phone = trim($_POST['phoneNumber']);		
			$address = trim($_POST['address']);	
			$id = $_SESSION['id'];
			
			// Execute
			$stmt->execute();
			
			// Get result and reset session variables
			$result = $stmt->get_result();
			
			while ($row = $result->fetch_assoc()){
			$_SESSION['address'] = $row['Address'];
			$_SESSION['phone'] = $row['PhoneNumber'];
			}
		}
		
		// This function gets emergency contact info for the session when called.
		// Call in PERSONALINFO.PHP
		function getEmergencyInfo() { 			
			// Prepare statement.
/**/		// i might need to be set to s. See last /**/ above
			$stmt = $conn->prepare("SELECT * FROM EmergencyContact WHERE EmergencyContact_ID=?";);
			$stmt->bind_param('i', $emergency_id); 
			
			// Getting the ID of the contact 
			$emergency_id = $_SESSION['emergency'];
		
			// Execute statement
			$stmt->execute();
			
			// Get result
			$result = $stmt->get_result();
		
			// Save as session variables 
			if($result->num_rows == 1) 
			{		
				while ($row = $result->fetch_assoc()){
					$_SESSION['em_id'] = $row['EmergencyContact_ID'];
					$_SESSION['em_fname'] = $row['FirstName'];
					$_SESSION['em_lastname'] = $row['LastName'];
					$_SESSION['em_address'] = $row['Address'];
					$_SESSION['em_email'] = $row['EmailAddress'];
					$_SESSION['em_phone'] = $row['PhoneNumber'];
					$_SESSION['em_relation'] = $row['RelationToStudent'];
				}
			}
		}
		// End of getEmergencyInfo() 
	
	// ************************************^ 6. PERSONAL INFO ^************************************
	
	
	
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
	
	// ON LOGOUT
	// Unset session, destroy variables
	// Close connection.
	//$conn->close();
?>