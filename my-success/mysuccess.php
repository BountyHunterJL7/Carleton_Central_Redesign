<head>
    <title>Carleton Central | MySuccess</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css">

    <!-- Page icon -->
    <link rel="shortcut icon" href="../media/carleton_mini_logo.png">

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="./mySuccess.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Carousel bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <div class="cu-navbar">
        <?php include '../templates/navbar.php' ?>
    </div>
    <!-- End of Navbar -->


    <!-- Content -->
    <div>
        <!-- Carousel code -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!--CAROUSEL IMAGES-->
                <div class="item active">
                    <img class="image" src="../media/banner4.jpg" alt="donkey kong">
                    <div class="my-auto text-center" id="hero-text">
                        <p style="color:white;">
                            My Success
                        </p>
                    </div>
                </div>

                <div class="item">
                    <img class="image" src="../media/banner3.jpg" alt="my name jeff">
                    <div class="my-auto text-center" id="hero-text">
                        <p style="color:white;">
                            Co-Op
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img class="image" src="../media/banner2.jpg" alt="my name jeff">
                    <div class="my-auto text-center" id="hero-text">
                        <p style="color:white;">
                            Carrer Opportunities
                        </p>
                    </div>
                </div>
            </div>
            <!--CAROUSEL FORWARD/BACK BUTTONS-->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="wrapper">
        <div class="links">
                <img id="raven-logo" src="../media/mySuccess.png"/>
                <button onclick="window.location.href = 'https://mycareer.carleton.ca';" class="view" type="button">MySuccess</button>
        </div>
    </div>

        <div class="container">
            <div class="terms">
                <!-- Terms (hide these) -->
                <h2>
                    Terms and Conditions
                </h2>
                <p>
                    By proceeding you are authorizing Carleton University to share your personal information for career development and academic support purposes. The information to be shared includes your First and Last Names, Student Number, Faculty, Degree, Major 1, Major 2, Level, Year of Study, Email Address, Phone Number, Graduation Information, Co-op Status, Citizenship (co-op students only), and Co-op Course Registration. Career Services, Co-operative Education, the Academic Advising Centre, and the Centre for Student Academic Support may send you occasional emails about career development activities, events, and academic support services. You will be able to opt out of these emails at any time.
                </p>
                <p>
                    Carleton recognizes and respects the importance of privacy and only shares your personal information with external sites that adhere to our standards of use under the Freedom of Information and Protection of Privacy Act. We will not share information with external sites that attempt to use your personal information for unintended purposes.
                </p>
                <p>
                    If you have any questions about the University’s collection, use, or disclosure of your Personal Information, please contact please contact <a href="mailto:university_privacy_office@carleton.ca">university_privacy_office@carleton.ca</a>.
                </p>
            </div>

            <div class="contact">
                <h2>
                    Contact
                </h2>
                
                <p>
                    Career Services, 401 Tory Building <br>
                    613-520-6611 <br>
                    <a href="mailto:career@carleton.ca">career@carleton.ca</a>
                </p>
                
                <p>
                    Co-operative Education, 1400 CTTC Building <br> 
                    613-520-4331 <br>
                    <a href="mailto:co-opprogram@carleton.ca">co-opprogram@carleton.ca</a>
                </p>
                
                <p>
                    Academic Advising Centre, 302 Tory Building <br>
                    613-520-7850 <br>
                    <a href="mailto:academicadvising@carleton.ca">academicadvising@carleton.ca</a>
                </p>
                
                <p>
                    Centre for Student Academic Support, 4th Floor MacOdrum Library <br>
                    613-520-3822 <br>
                    <a href="mailto:csas@carleton.ca">csas@carleton.ca</a>
                </p>
                
                <p>
                    Science Student Success Centre (SSSC), 3431 Herzberg Laboratories <br>
                    613-520-2600 ext. 3111 <br>
                    <a href="mailto:sssc@carleton.ca">sssc@carleton.ca</a>
                </p> 
            </div>
        </div>

    </div>
    <!-- End of Content -->
    

   <!-- Footer -->
    <?php include '../templates/footer.php' ?>  

</body>