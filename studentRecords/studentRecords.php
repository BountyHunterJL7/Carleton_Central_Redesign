<head>
    <title>Carleton Central | Student Records</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css">

    <!-- Page icon -->
    <link rel="shortcut icon" href="../media/carleton_mini_logo.png">

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="../studentRecords/studentrecords.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- Navbar -->
    <div class="cu-navbar">
        <?php include '../templates/navbar.php' ?>
    </div>
    <!-- End of Navbar -->


    <!-- Content -->
    <div class="content">
        <h1>
            Student Records
        </h1>
        <p>View and manage your student records.</p>

        <!-- List of options -->

        <!-- Changing from a list to a set of divs because I think it will be easier to implement the CSS that way. Like give them each a class of "card" and id of "left", "middle", or "right" -->
        <div id="wrapper">
            <div class="support">
                <img id="raven-logo" src="../media/support-service.png" />
                <h2>
                    Support Services
                </h2>
                <p>
                    Manage your academic and non-academic support services.
                </p>
                <button onclick="window.location.href = 'http://ugrad.bitdegree.ca/~brandonwhite/studentRecords/support.php';" class="view" type="button">View</button>
            </div>

            <div class="admissions">
                <img id="raven-logo" src="../media/Admission.png" />
                <h2>
                    Admissions
                </h2>
                <p>
                    View and manage your applications and offers.
                </p>
                <button class="view" type="button">View</button>
            </div>

            <div class="grades">
                <img id="raven-logo" src="../media/myGrades.png" />
                <h2>
                    MyGrades
                </h2>
                <p>
                    View your final grades for a selected term.
                </p>
                <button onclick="window.location.href = 'http://ugrad.bitdegree.ca/~brandonwhite/studentRecords/mygrades.php';" class="view" type="button">View</button>
            </div>
        </div>
    </div>
    <!-- End of Content -->

    <!-- Footer -->
    <?php include '../templates/footer.php' ?>

</body>