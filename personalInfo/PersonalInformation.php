<?php
require_once('../server/server.php');
?>
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
    <div class="cu-navbar">
        <?php
        include '../templates/navbar.php';
        ?>
    </div>

    <div id="Wrapper">
        <div class="campusCard">
            <h1 class="cardTitle">Campus Card</h1>
            <p>Proud supporter of Better Carleton Central</p><br>
            <div class="linkBox">
                <img id="raven-logo" src="../media/campus-card.png" />
                <h3>Carleton Central</h3>
                <p>View the status of your campus card.</p>
                <div class="viewButton">
                    <button onclick="window.location.href='https://wcc.carleton.ca/student/welcome.php';">View</button>
                </div>

            </div>
        </div>

        <div class="info">
            <div class="titleText">
                <h1>Student Information</h1>
                <p>View or edit your personal information or emergency contact info.</p>
            </div>

            <div>
                <div>
                    <p>Personal Information</p>
                    <div>
                        <!-- Name -->
                        <input type="text" value="<?php
                                                    echo $_SESSION['fname'] . " " . $_SESSION['lname'];
                                                    ?>" readonly><br><br>

                        <!-- Email -->
                        <input type="text" value="<?php
                                                    echo $_SESSION['email'];
                                                    ?>" readonly><br><br>

                        <!-- Phone Number -->
                        <input type="text" for="address" value="<?php
                                                                echo $_SESSION['phone'];
                                                                ?> " readonly><br><br>

                        <!-- Street Address -->
                        <input type="text" value="<?php
                                                    echo $_SESSION['address'];
                                                    ?>" readonly><br><br>

                        <input type="text" value="Your Social Insurance Number (SIN) is on record" readonly><br><br>
                        <form action="EditPersonalInfo.php">
                            <input id="submit" type="submit" value="Edit" />
                        </form><br>
                    </div>

                    <?php
                    $emergency_id = $_SESSION['emergency'];


                    // Select emergency contact info from server. 


                    $query = "SELECT * FROM EmergencyContact WHERE EmergencyContact_ID=$emergency_id";

                    $result = $conn->query($query);


                    if ($result->num_rows == 1) {
                        while ($row = $result->fetch_assoc()) {
                            $_SESSION['em_id'] = $row['EmergencyContact_ID'];
                            $_SESSION['em_fname'] = $row['FirstName'];
                            $_SESSION['em_lastname'] = $row['LastName'];
                            $_SESSION['em_address'] = $row['Address'];
                            $_SESSION['em_email'] = $row['EmailAddress'];
                            $_SESSION['em_phone'] = $row['PhoneNumber'];
                            $_SESSION['em_relation'] = $row['RelationToStudent'];
                        }
                    }
                    ?>


                    <div>
                        <p>Emergency Contact</p>
                        <div>
                            <!-- Name -->
                            <input type="text" for="contactName" value="<?php
                                                                        echo $_SESSION['em_fname'] . " " .  $_SESSION['em_lastname'];
                                                                        ?>" readonly></input><br><br>

                            <!-- Relationship -->
                            <input type="text" for="ContactRelationship" value="<?php
                                                                                echo $_SESSION['em_relation'];
                                                                                ?>" readonly></input><br><br>

                            <!-- Phone num-->
                            <input type="text" for="contactNumber" value="<?php
                                                                            echo $_SESSION['em_phone'];
                                                                            ?>" readonly></input><br><br>

                            <!-- Address -->
                            <input type="text" for="contactAddress" value="<?php
                                                                            echo $_SESSION['em_address'];
                                                                            ?>" readonly></input><br><br>

                            <!-- Email -->
                            <input type="text" for="email" value="<?php
                                                                    echo $_SESSION['em_email'];
                                                                    ?>" readonly></input><br><br>



                        </div>
                        <form action="EditInfo.php">
                            <input id="submit" type="submit" value="Edit" />
                        </form><br>
                    </div>

                    <div class="otherInfo">
                        <p>Other Information
                            <p>To change your legal name or perferred first name visit the registrars office (300 Tory Building - 8:30 to 4:30 Monday to Friday)</p>
                            <p>To change your MyCarletonOne Account information visit </p><a href="https://myone.carleton.ca">myone.carleton.ca</a>
                            <p>To change your SIN number contact student_accounts@carleton.ca</p>
                            <a href="#">Travel Registry</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../templates/footer.php' ?>
</body>

</html>