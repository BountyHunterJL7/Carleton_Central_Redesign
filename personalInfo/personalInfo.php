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
    <!-- Navbar -->
    <div class="navbar">
        <?php include '../templates/navbar-template.php' ?>
    </div>
    <!-- End of Navbar -->
    
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
                        <input type="text" value="Phone Number" readonly><br><br>
                        <input type="text" value="Address" readonly><br><br>
                        <input type="text" value="Postal Code" readonly><br><br>
                        
                        <input type="text" value="Your SIN number is on record" readonly><br><br>
                        <form action="EditPersonalInfo.html">
                        <input type="submit" value="Edit" />
                        </form><br>
                    </div>

                    <div>
                        <p>Emergency Contact</p>
                        <div>
                            <input type="text" id="country" name="Cname" value="Name" readonly><br><br>
                            <input type="text" id="country" name="Cphone" value="Phone" readonly><br><br>
                            <input type="text" id="country" name="Caddress" value="Address" readonly><br><br>
                            <input type="text" id="country" name="Ccountry" value="Relationship" readonly><br><br>
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