<head>
    <title>Carleton Central | Housing</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css">

    <!-- Page icon -->
    <link rel="shortcut icon" href="../media/carleton_mini_logo.png">

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="./housing.css">

    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
</head>

<body>
    <!-- Navbar -->
    <div class="cu-navbar">
        <?php include '../templates/navbar.php' ?>
    </div>
    <!-- End of Navbar -->

    <!-- Nav Sidebar -->
    <div>

    </div>
    <!-- End of Nav Sidebar -->

    <!-- Content -->
    <div class="content">

<div id="Wrapper">
            <div class="status">
                <h1 class="cardTitle">Housing Status</h1>
                <p>Lorum Ipsum type beat</p><br>
                <div class="linkBox">
                    <img
                            id="raven-logo"
                            src="../media/HousingResidence.png"
                    />
                    <h3>Housing Status</h3>
                    <p>Lorum Ipsum type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat</p>
                    <div class="viewButton">
                        <button onclick="window.location.href='https://wcc.carleton.ca/student/welcome.php';">View</button>
                    </div>
                    
                </div>
            </div>
        <!-- End of View Housing -->


        <!-- Apply to Residence -->
        <div class="apply">
            <div class="titleText">
                <h1>Housing Application Form</h1>
                <p><a href="https://housing.carleton.ca/our-buildings/">View our housing choices.</a></p>
                <select name="term" class ="termSelect">
                <option value="0">Select Term</option>
                <option value="1">Winter</option>
                <option value="2">Summer</option>
                <option value="3">Fall</option>
                </select>
            </div>

            <form>
                <h2>
                    Student Information
                </h2>
                <br>
                First name:
                <input type="text" name="firstname">
                <br><br>
                Last name:
                <input type="text" name="lastname">
                <br><br>
                <select name="gender">
                    <option value="0">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <br><br>

                <select name="year">
                <option value="0">Year Standing</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                    <option value="four">Four</option>
                </select>
                <br><br>
                Phone number:
                <input type="text" name="phone">
                <br><br>
                Email address:
                <input type="text" name="email">
                <br><br>
                Address:
                <input type="text" name="address">
                <br><br>
                City:
                <input type="text" name="city">
                <br><br>
                Country:
                <input type="text" name="country">
                <br><br>
                Province:
                <input type="text" name="province">
                <br><br>
                Postal Code:
                <input type="text" name="postal">
                <br><br>

                
                <select name="residency">
                <option value="0">Residence Name</option>
                    <option value="dundasStormont">Dundas and Stormont</option>
                    <option value="frontenac">Frontenac</option>
                    <option value="glengarry">Glengarry</option>
                    <option value="grenvilleRussel">Grenville and Russel</option>
                    <option value="lenarkRenfrew">Lenard and Renfrew</option>
                    <option value="leeds">Leeds</option>
                    <option value="lennoxAddington">Lennox and Addington</option>
                    <option value="prescott">Prescott</option>
                </select>
                <br><br>

                <select name="residency">
                <option value="0">Floor</option>
                    <!-- We need to find a way to populate these with the room numbers in the database. They can be pretty random, as long as it works -->
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                    <option value="1">9</option>
                    <option value="1">10</option>
                    <option value="1">11</option>
                    <option value="1">12</option>
                </select>
                <br><br>

                <a href="https://housing.carleton.ca/residence-and-meal-plan-fees/traditional-residence-fees/">Click here for current deposit fees</a>
                <br><br><br><br>
                
                <h2>
                    Payment Information
                </h2>
                <br>
                Name on card:
                
                <input type="text" name="creditName">
                <br><br>
                

                Card number:
                
                <input type="text" name="creditNumber">
                <br><br>
                

                Expiration (mm/yy):
                
                <input type="text" name="creditExpiration">
                <br><br>
                

                Security code:
                
                <input type="text" name="creditSecurity">
                <br><br>
                


                <input type="submit" value="Submit">
            </form>

        </div>

    </div>
</div>

    <!-- End of Content -->

    <!-- Footer -->
    <?php include '../templates/footer.php' ?>

</body>