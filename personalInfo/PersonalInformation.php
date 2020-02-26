<!DOCTYPE html>
<head>
    <title>Carleton Central | Personal Information</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css">

     <!-- Page icon -->
     <link rel="shortcut icon" href="../media/carleton_mini_logo.png">

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="./PersonalInfo.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="left">
            <a href="../home/home.html">
                <img
                    id="header-logo"
                    src="../media/carleton_university_logo_white.png"
                />
            </a>
        </div>

        <div class="flex middle">
            <a href="../personalInfo/personalInformation.php">Personal Info</a>

            <a href="../studentRecords/studentRecords.html">Student Records</a>

            <a href="../registration/registration.html">Registration</a>

            <a href="../awards/awards.html">Awards/Financial Assistance</a>

            <a href="../my-success/mysuccess.html">MySuccess</a>

            <a href="../housing/housing.html">Housing</a>
        </div>

        <div class="right"></div>
    </div>
    <div class="info">
        <div>
            <h1>Your Information</h1>
        </div>
        <div>
            <div>
                <h2>Your Name</h2>
                <p>To change your legal name or perferred first name visit the registrars office (300 Tory Building - 8:30 to 4:30 Monday to Friday)</p>
                <?php
                echo "<h3>" . $_REQUEST["address"] . "</h3>";
                ?>   
                <div>
            <p>MyCarletonOne Account information and email</p>
            <p>To change your MyCarletonOne Account information visit </p><a href="https://myone.carleton.ca">myone.carleton.ca</a>
            </div>
            <div>
                <p>Your SIN number is on Record</p>
                <p>To change your SIN number contact student_accounts@carleton.ca</p>
            </div>
            <form action="EditPersonalInfo.html">
                    <input type="submit" value="Edit Address" />
                </form>
            <a href="#">Trevel Regestry</a>
            <div>
            <a href="https://wcc.carleton.ca/student/welcome.php">Campus Card</a>
            </div>

            </div>
                <h1>Emergency Contact Information</h1>
                <form action="EditInfo.html">
                    <input type="submit" value="Edit" />
                </form>
                <input type="text" for="contactName" readonly></input><br><br>
                <?php
                echo "<h3>" . $_REQUEST["contactName"] . "</h3>";
                ?>
                <div>
                <input type="text" for="contactAddress" readonly></input><br><br>
                    <?php
                    echo "<h3>" . $_REQUEST["contactNumber"] . "</h3>";
                    ?>
                     <input type="text" for="contactAddress" readonly></input><br><br>
                    <?php
                    echo "<h3>" . $_REQUEST["contactAddress"] . "</h3>";
                    ?>
                    <?php
                    echo "<h3>" . $_REQUEST["contactPostalCode"] . "</h3>";
                    ?>
                    <?php
                    echo "<h3>" . $_REQUEST["contactCountry"] . "</h3>";
                    ?>
                     <input type="text" for="ContactRelationship" readonly></input><br><br>
                    <?php
                    echo "<h3>" . $_REQUEST["contactRelationship"] . "</h3>";
                    ?>
                </div>
            <div>
        </div>
    </div>
</body>
</html>