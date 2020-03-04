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

    <h3>Enter your Emergency Contact Info</h3>

    <div id="wrapper">
        <form method="POST" action="PersonalInformation.php">
                <div>
                    <label for="contactName"><b>Name</b></label>
                    <input type="text" id="contactName" name="contactName" />
                    <label for="contactRelationship"><b>Relationship</b></label>
                    <input type="text" id="contactRelationship" name="contactRelationship" />
                    <label for="contactNumber"><b>Phone Number</b></label>
                    <input type="number" id="contactNumber" name="contactNumber" />
                    <label for="contactAddress"><b>Address</b></label>
                    <input type="text" id="contactAddress" name="contactAddress" />
                    <label for="contactCountry"><b>Country</b></label>
                    <input type="text" id="contactCountry" name="contactCountry" />
                    <label for="contactPostalCode"><b>Postal code</b></label>
                    <input type="text" id="contactPostalCode" name="contactPostalCode" />
                </div>
            <input type="submit" />
        </form>
    </div>
</body>
</html>