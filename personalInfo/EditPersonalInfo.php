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

    <h3>Enter your Personal Info</h3>

    <div id="wrapper">
        <form method="POST" action="EditPersonalInfo.php">
            <div>    
                <label for="phoneNumber"><b>Your Phone Number</b></label>
                <input type="number" id="phoneNumber" name="phoneNumber" />

                <label for="address"><b>Your Address</b></label>
                <input type="text" id="address" name="address" />
            </div>
            <input type="submit" name="update_personal" />
        </form>
    </div>
	
	<?php 
		if (isset($_POST['update_personal'])) {
			
			$phone = trim($_POST['phoneNumber']);		
			$address = trim($_POST['address']);	
			$id = $_SESSION['id'];
			
			$query = "UPDATE StudentInfo SET PhoneNumber = $phone, Address = '$address' WHERE Student_ID = $id";
			
			$conn->query($query);
			
			$_SESSION['phone'] = $phone;
			$_SESSION['address'] = $address;
			
			// header('location: http://ugrad.bitdegree.ca/~brandonwhite/PersonalInfo/PersonalInformation.php');
		}
    ?>
    
    <!-- Footer -->
    <?php include '../templates/footer.php' ?>

</body>
</html>