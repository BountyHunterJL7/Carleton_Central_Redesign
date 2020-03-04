<head>
    <title>Carleton Central | Personal Information</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css">

    <!-- Page icon -->
    <link rel="shortcut icon" href="../media/carleton_mini_logo.png">

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="./support.css">

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
    <div class="navbar">
        <?php include '../templates/navbar.php' ?>
    </div>
    <!-- End of Navbar -->

    <!-- Carousel code -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!--CAROUSEL IMAGES-->
            <div class="item active">
                <img class="image" src="../media/campus_landscape_summer.jpg" alt="donkey kong">
                <div class="my-auto text-center" id="hero-text">
                    <p style="color:white;">
                        Support Dogs
                    </p>
                </div>
            </div>

            <div class="item">
                <img class="image" src="../media/campus_landscape_summer.jpg" alt="my name jeff">
                <div class="my-auto text-center" id="hero-text">
                    <p style="color:white;">
                        Support Dogs
                    </p>
                </div>
            </div>
            <div class="item">
                <img class="image" src="../media/campus_landscape_summer.jpg" alt="my name jeff">
                <div class="my-auto text-center" id="hero-text">
                    <p style="color:white;">
                        Support Dogs
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


    <div class="container">
    <p>Available support services for students at Carleton University</p>

        <div class="wrapper">
            <div class="links">
                <img id="raven-logo" src="../media/mySuccess.png"/>
                <button onclick="window.location.href = 'https://mycareer.carleton.ca/home.htm';" class="view" type="button">MySuccess Portal</button>
            </div>
            <div class="links">
                <img id="raven-logo" src="../media/pmc.png"/>
                <button onclick="window.location.href = 'https://carleton.ca/pmc/';" class="view" type="button">MyPMC</button>
            </div>
            <div class="links">
                <img id="raven-logo" src="../media/academic-support.png"/>
                <button onclick="window.location.href = 'https://carleton.ca/academicadvising/';" class="view" type="button">Academic Advising Centre</button>
            </div>
        </div>
    </div>


</body>