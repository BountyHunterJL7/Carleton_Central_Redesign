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
            <a href="http://ugrad.bitdegree.ca/~brandonwhite/PersonalInfo/PersonalInformation.php">Personal Info</a>

            <a href="https://bettercarletoncentral.com/studentrecords/studentrecords">Student Records</a>

            <a href="https://bettercarletoncentral.com/registration/registration">Registration</a>

            <a href="https://bettercarletoncentral.com/awards/awards">Awards/Financial Assistance</a>

            <a href="https://bettercarletoncentral.com/my-success/mysuccess">MySuccess</a>

            <a href="https://bettercarletoncentral.com/housing/housing">Housing</a>
        </div>

        <div class="right"></div>
    </div>



    <div id="Wrapper">
        <div class="campusCard">
            <h1 class="cardTitle">Campus Card</h1>
            <p>Lorum Ipsum type beat</p><br>
            <div class="linkBox">
                <img
                        id="raven-logo"
                        src="../media/campus-card.png"
                />
                <h3>Carleton Central</h3>
                <p>Lorum Ipsum type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat</p>
                <div class="viewButton">
                    <button onclick="window.location.href='https://wcc.carleton.ca/student/welcome.php';">View</button>
                </div>
                
            </div>
        </div>
        <div class="info">
    <div class="titleText">
        <h1>Student Information</h1>
        <p>Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat</p>
    </div>
    <div>
        <div>
            <p>Personal Information</p>
            <div>
                <input type="text" value="Name" readonly><br><br>
                <input type="text" value="Email" readonly><br><br>

                <input type="text" for="adress" value="<?php
                echo $_REQUEST["phoneNumber"];
                ?> " readonly><br><br>

                <input type="text" value="<?php
                echo $_REQUEST["address"];
                ?> " readonly><br><br>
                 
                <input type="text" value="<?php
                echo $_REQUEST["postalCode"];
                ?> " readonly><br><br>
                
                <input type="text" value="Your SIN number is on record" readonly><br><br>
                <form action="EditPersonalInfo.html">
                <input type="submit" value="Edit" />
                </form><br>
            </div>

            <div>
                <p>Emergency Contact</p>
                <div>
                    <input type="text" for="contactName" value="<?php
                    echo $_REQUEST["contactName"];
                    ?>" readonly></input><br><br>
                    
                    <input type="text" for="ContactRelationship" value="<?php
                    echo $_REQUEST["contactRelationship"];
                    ?>" readonly></input><br><br>
                    
                    <input type="text" for="contactNumber" value="<?php
                    echo $_REQUEST["contactNumber"];
                    ?>" readonly></input><br><br>
                    
                    <input type="text" for="contactAddress" value="<?php
                    echo $_REQUEST["contactAddress"];
                    ?>" readonly></input><br><br>
                    
                    <input type="text" for="contactCountry" value="<?php
                    echo $_REQUEST["contactCountry"];
                    ?>" readonly></input><br><br>
                    
                    <input type="text" for="contactPostalCode" value="<?php
                    echo $_REQUEST["contactPostalCode"];
                    ?>" readonly></input><br><br>
                    
                    
                    
                </div>
                <form action="EditInfo.html">
                    <input type="submit" value="Edit" />
                </form><br>
            </div>

            <div class="otherInfo">
                <p>Other Information</div>
                <p>To change your legal name or perferred first name visit the registrars office (300 Tory Building - 8:30 to 4:30 Monday to Friday)</p>
                <p>To change your MyCarletonOne Account information visit </p><a href="https://myone.carleton.ca">myone.carleton.ca</a>
                <p>To change your SIN number contact student_accounts@carleton.ca</p>
                <a href="#">Trevel Regestry</a>
            </div>
        <div>
    </div>
</div>
    </div>
</body>
</html>