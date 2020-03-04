<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Carleton Central | Personal Information</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css">

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="../personalInfo/edit.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <?php include '../templates/navbar-template.php' ?>
    </div>

    <h3>Enter your Personal Info</h3>

    <div id="wrapper">
        <form method="POST" action="PersonalInformation.php">
            <div>    
                <label for="address"><b>Your Phone Number</b></label>
                <input type="number" id="phoneNumber" name="phoneNumber" />

                <label for="address"><b>Your Address</b></label>
                <input type="text" id="address" name="address" />

                <label for="address"><b>Your Postal Code</b></label>
                <input type="text" id="postalCode" name="postalCode" />
            </div>
            <input type="submit" />
        </form>
    </div>
</body>
</html>