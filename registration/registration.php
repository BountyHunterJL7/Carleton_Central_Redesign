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
        <p class="explainerParagraph">Register for courses. To add a course to your timeline, simply click the add button.</p>

        <!-- Course list PHP requests -->
        <?php 
            //SQL query to fetch course info
            $query = "SELECT * FROM CourseInfo";

            //Connect and make the sql request
            $result = $conn->query($query);

            //Variable used to assign specific classes to each course
            $course_number = 0;

            echo '<div id="wrapper">';

            while ($row = $result->fetch_assoc()) {
                //Every time we go through the loop, it's a new course
                $course_number++;

                //Echo the div containg the course information
                echo '<div class="course '.$course_number.'">
                <h2>'.$row['CourseName'].'</h2>
                <p>'.$row['CourseDescription'].'</p>
                <form action="" method="POST" class="addForm">
                    <input class="add" type="submit" name="submitButton" value="Add">
                </form>
                </div>';//End of echo
            }
            
            echo '</div>';

            if(isset($_POST['submitButton'])){
                //Prepare sql query
                //$query = "ADD * FROM CourseInfo";

                echo $_SESSION['fname'] . " " . $_SESSION['lname'];
            }
        ?>

        <!-- View online courses button-->
        <button class="viewOnlineCourses redButton" type="button">View Online Courses</button>

        <!-- Student timetable -->

        <!-- Footer -->
        <?php include '../templates/footer.php' ?>

    </div><!-- End of div content -->

</body>