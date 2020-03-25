<?php 
	require_once('../server/server.php');
?>

<head>
    <title>Carleton Central | MyGrades</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css">

    <!-- Page icon -->
    <link rel="shortcut icon" href="../media/carleton_mini_logo.png">

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="./myGrades.css">

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

	<div id="Wrapper">
			<div class="program">
				<h1 class="programTitle">Current Program</h1>
				<p>BIT Interactive Multimedia and Design</p><br>
				<!-- Yeah I know the above should be from the databse, but ay it's 2020 -->
				<div class="linkBox">
					<img
							id="raven-logo"
							src="../media/program-status.png"
					/>
					<h3>Program Status</h3>
					<p>You are in good standing.</p>
					<p>Your CGPA is: 9.83/12.00</p>                
				</div>
			</div>
					<div class="info">
						<div class="titleText">
							<h1>View Grades for <?php echo $_GET['term']; ?></h1>
							<p>You brought this upon yourself.</p>
						</div>
					</div>

		<div class="php">
			<?php 
				
				// Set useful variables.
				$term = $_GET['term'];
				$courseListId = $_SESSION['coursesid'];
			
				// Now let's put the course IDs in one array and grades in another.
				$acourseIds = array();
				$agrades = array();
				$numCourses = 0;
				
				$query = "SELECT * FROM ListOfCourses WHERE CourseList_ID = '$courseListId' AND Term = '$term'";
				$result = $conn->query($query);
				
				if ($result->num_rows > 0) {		
					
					while ($row = $result->fetch_assoc()) {
						
						$acourseIds[$numCourses] = $row['Course_ID'];
						$agrades[$numCourses] = $row['Grade'];		
						$numCourses++;
					}
				}
				
				// Cool, now lets get course names. 
				$acourseNames = array();
				
				$x = 0;
				while($x < $numCourses) {
					
					$query = "SELECT CourseName FROM CourseInfo WHERE Course_ID = '$acourseIds[$x]'"; 
					$result = $conn->query($query);
					
					$row = $result->fetch_assoc();
					
					$acourseNames[$x] = $row['CourseName'];
					$x++;
				}
				
				// So I know all of the above works, time for the hard part
				
				echo "<table>";
				echo "<tr>";
				echo "<th>Course ID</th>";
				echo "<th>Course Name</th>";
				echo "<th>Final Grade</th>";
				echo "<tr>";
				
				
				$z = 0;
				while ($z < $numCourses) {
					echo "<tr>";
					echo "<td>$acourseIds[$z]</td>";
					echo "<td>$acourseNames[$z]</td>";
					echo "<td>$agrades[$z]</td>";
					$z++;
				}
		
				echo "</table>";
				
			?>
		</div>

	</div>
	<!-- End of Content -->

    <!-- Footer -->
    <?php include '../templates/footer.php' ?>

</body>