<?php 
	require_once('../server/server.php');
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Carleton Central | Personal Information</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css">

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="edit.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <?php include '../templates/navbar.php' ?>
    </div>

    <h3>Enter your Emergency Contact Info</h3>

    <div id="wrapper">
        <form method="POST" action="EditInfo.php">
                <div>
                    <label for="em_fname"><b>First Name</b></label> 
					<input type="text" id="em_fname" name="em_fname" />
					
					<label for="em_lname"><b>Last Name</b></label> 
					<input type="text" id="em_lname" name="em_lname" />
					
					<label for="em_address"><b>Address</b></label> 
					<input type="text" id="em_address" name="em_address" />
					
					<label for="em_email"><b>Email</b></label> 
					<input type="text" id="em_email" name="em_email" />
					
					<label for="em_phone"><b>Phone Number</b></label> 
					<input type="nubmer" id="em_phone" name="em_phone" />
					
					<label for="em_relation"><b>Relation to Student</b></label> 
					<input type="text" id="em_relation" name="em_relation" />
                </div>
            <input type="submit" name="update_emergency"/>
        </form>
    </div>
	
	<?php 
		if (isset($_POST['update_emergency'])) {
			
			$em_fname = trim($_POST['em_fname']);
			$em_lname = trim($_POST['em_lname']);
			$em_address = trim($_POST['em_address']);
			$em_email = trim($_POST['em_email']);
			$em_phone = trim($_POST['em_phone']);
			$em_relation = trim($_POST['em_relation']);
			$em_id = $_SESSION['em_id'];
			
			$query = "UPDATE EmergencyContact SET FirstName = '$em_fname', LastName = '$em_lname', EmailAddress = '$em_email', PhoneNumber = '$em_phone', RelationToStudent = '$em_relation' WHERE EmergencyContact_ID = $em_id";

			$conn->query($query);
			
			$_SESSION['em_fname'] = $em_fname;
			$_SESSION['em_lastname'] = $em_lname;
			$_SESSION['em_address'] = $em_address;
			$_SESSION['em_email'] = $em_email;
			$_SESSION['em_phone'] = $em_phone;
			$_SESSION['em_relation'] = $em_relation;
			
			//header('location: http://ugrad.bitdegree.ca/~brandonwhite/PersonalInfo/PersonalInformation.php');
		}
	?>
</body>
</html>