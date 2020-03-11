<head>
    <title>Carleton Central | Housing</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css">

    <!-- Page icon -->
    <link rel="shortcut icon" href="../media/carleton_mini_logo.png">

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="">

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

        <!-- 
            **************************************************
            *                                                *
            * These will become hidden or unhidden depending *
            * on which page you click. View housing is the   *
            * default page.                                  *
            *                                                *
            **************************************************
        -->

        <!-- View Housing -->
        <div>

            <!-- 
                **********************************
                * Template for House Image Cards *
                **********************************

                (Clicking the image opens a larger view of the image. Not sure if this requires a link or not yet.)
    
                (Clicking the view details button could open up a popup where you can view details and click a button to apply.)
                
                <a href=" "><img src=" " alt =" " height=" " width=" "></a>
                <button type="button">View Details</button>
                
                **********************************
                
                (On View Details:)
                (This will be populated from the SQL database possibly.)

                <span>
                    <h2></h2>
                    <h3></h3>
                    <img alt="exterior">
                    <img alt="interior">
                    <img alt="floorplan">
                    <p></p>
                    <button type="button">Apply</button>
                </span>

                (When you click apply, you will be taken to the application page and that house's details will be autofilled.)
            -->

            <h1>
                View Housing
            </h1>

            <!-- Sample Card -->
            <span id="HOUSE0001">
                <h2></h2>
                <h3></h3>
                <img alt="exterior">
                <img alt="interior">
                <img alt="floorplan">
                <p></p>
                <button type="button">Apply</button>
            </span>
            <!-- End of Sample Card -->


        </div>
        <!-- End of View Housing -->


        <!-- Apply to Residence -->
        <div>

            <h1>
                Apply to a Residence
            </h1>


            <form>
                <h2>
                    Applicant Information
                </h2>

                First name:
                <br>
                <input type="text" name="firstname">
                <br>
                <br>

                Last name:
                <br>
                <input type="text" name="lastname">
                <br>
                <br>

                Gender:
                <br>
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <br>
                <br>

                Year standing:
                <br>
                <select name="year">
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                    <option value="four">Four</option>
                </select>
                <br>
                <br>

                Phone number:
                <br>
                <input type="text" name="phone">
                <br>
                <br>

                Email address:
                <br>
                <input type="text" name="email">
                <br>
                <br>

                Address:
                <br>
                <input type="text" name="address">
                <br>
                <br>

                City:
                <br>
                <input type="text" name="city">
                <br>
                <br>

                Country:
                <br>
                <input type="text" name="country">
                <br>
                <br>

                Province:
                <br>
                <input type="text" name="province">
                <br>
                <br>

                Postal Code:
                <br>
                <input type="text" name="postal">
                <br>
                <br>

                <h2>
                    Residence
                </h2>

                Residency Name:
                <br>
                <select name="residency">
                    <option value="dundasStormont">Dundas and Stormont</option>
                    <option value="frontenac">Frontenac</option>
                    <option value="glengarry">Glengarry</option>
                    <option value="grenvilleRussel">Grenville and Russel</option>
                    <option value="lenarkRenfrew">Lenard and Renfrew</option>
                    <option value="leeds">Leeds</option>
                    <option value="lennoxAddington">Lennox and Addington</option>
                    <option value="prescott">Prescott</option>
                </select>
                <br>
                <br>

                Room Number:
                <br>
                <select name="residency">
                    <!-- We need to find a way to populate these with the room numbers in the database. They can be pretty random, as long as it works -->
                    <option value="1">1</option>
                </select>
                <br>
                <br>

                <h2>
                    Deposit
                </h2>

                <a href="https://housing.carleton.ca/residence-and-meal-plan-fees/traditional-residence-fees/">Click here for current deposit fees</a>
                <br>
                <br>

                Name on card:
                <br>
                <input type="text" name="creditName">
                <br>
                <br>

                Card number:
                <br>
                <input type="text" name="creditNumber">
                <br>
                <br>

                Expiration (mm/yy):
                <br>
                <input type="text" name="creditExpiration">
                <br>
                <br>

                Security code:
                <br>
                <input type="text" name="creditSecurity">
                <br>
                <br>


                <input type="submit" value="Submit">
            </form>

        </div>
        <!-- End of Apply to Residence
        

        <!-- View Applications -->
        <div>
            <h1>
                View Applications
            </h1>

            <!-- At this point it's more of a PHP thing to retrieve application information. -->
        </div>
        <!-- End of View Applications -->

    </div>
    <!-- End of Content -->

    <!-- Footer -->
    <div>



    </div>
    <!-- End of Footer -->

</body>