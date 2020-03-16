<?php 
	require_once('../server/server.php');
?>

<!DOCTYPE html>
<head>
    <title>Carleton Central | Registration</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css" />

    <!-- Page icon -->
    <link rel="shortcut icon" href="../media/carleton_mini_logo.png">

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="registration.css" />

    <!-- Link to font awesome -->
    <script src="https://use.fontawesome.com/7f0bcd1195.js"></script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- Navbar -->
    <div class="cu-navbar">
        <?php include '../templates/navbar.php' ?>
    </div>
    <!-- End of Navbar -->

    <!-- Content -->
    <div class="content">
        <h1>Course Registration</h1>

        <!-- Search bar -->
        <form action="/action_page.php" class="searchForm">
            <input type="text" placeholder="Search.." class="searchBar">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>

        <!-- Drop down lists -->
        <div class="formWrapper">
            <form action="/action_page.php">
                <select name="courseLevel">
                    <option value="courseLevel">Course Level</option>
                </select>
                <br><br>

                <select name="faculty">
                    <option value="faculty">Faculty</option>
                </select>
                <br><br>

                <select name="program">
                    <option value="program">Program</option>
                </select>
                <br></br>

                <select name="subject">
                    <option value="subject">Subject</option>
                </select>
                <br><br>

                <select name="courseCode">
                    <option value="courseCode">Course Code</option>
                </select>
            </form>
        </div>

        <!-- Text -->
        <p class="explainerParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        <!-- Course list PHP requests -->
        <?php 
            //Open session
            $course_id = $_SESSION['courseInfo'];

            //SQL query to fetch course info
            $query = "SELECT * FROM CourseInfo";

            $result = $conn->query($query);

            while ($row = $result->fetch_assoc()) {
                //$_SESSION['courseName'] = 
            }

            console.log("test");
        
        
        ?>

        <!-- Course list with add buttons -->
        <div id="wrapper">
            <div class="course 1">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <button class="add" type="button">Add</button>
            </div>

            <div class="course 2">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <button class="add" type="button">Add</button>
            </div>

            <div class="course 3">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <button class="add" type="button">Add</button>
            </div>

            <div class="course 4">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <button class="add" type="button">Add</button>
            </div>

            <div class="course 5">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <button class="add" type="button">Add</button>
            </div>

            <div class="course 6">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <button class="add" type="button">Add</button>
            </div>
        </div><!-- End of wrapper div -->

        <!-- View online courses button-->
        <button class="viewOnlineCourses redButton" type="button">View Online Courses</button>

        <!-- Student timetable -->

        <!-- Footer -->
        <?php include '../templates/footer.php' ?>

    </div><!-- End of div content -->

</body>