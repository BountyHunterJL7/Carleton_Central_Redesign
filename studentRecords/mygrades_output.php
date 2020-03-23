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
				<p>Lorum Ipsum type beat</p><br>
				<div class="linkBox">
					<img
							id="raven-logo"
							src="../media/program-status.png"
					/>
					<h3>Program Status</h3>
					<p>Lorum Ipsum type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat</p>                
				</div>
			</div>
					<div class="info">
						<div class="titleText">
							<h1>View Grades for <?php $_GET['term']; ?></h1>
							<p>Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat</p>
						</div>
					</div>

		<div>
			<?php 
				
				// Set useful variables.
				$term = $_GET['term'];
				$courseListId = $_SESSION['coursesid'];
				
				// Now let's put the course IDs in one array and grades in another.
				$a_courseIds = array();
				$a_grades = array();
				$numCourses = 0;
				
				$query = "SELECT * FROM ListOfCourses WHERE CourseList_ID = '$courseListId' AND Term = '$term'";
				$result = $conn->query($query);
				
				if ($result->num_rows > 0) {		
					
					while ($row = $result->fetch_assoc()) {
						
						$a_courseIds[$numCourses] = $row['Course_ID'];
						$a_grades[$numCourses] = $row['Grade'];
						$numCourses++;
					}
				}
				
				// Cool, now lets get course names. 
				$a_courseNames = array();
				
				for ($i=0; $i < $numCourses; $i++;) {
					
					$query = "SELECT CourseName FROM CourseInfo WHERE Course_ID = '$a_courseIds[$i]'"; 
					$result = $conn->query($query);
					
					$row = $result->fetch_assoc();
					
					$a_courseNames[$i] = $row['CourseName'];
				}
				
				// Finally we throw it all together in a table.
				echo	"<table>";
				echo		"<tr>";
				echo			"<th>Course ID</th>";
				echo			"<th>Course Name</th>";
				echo			"<th>Final Grade</th>";
				echo		"</tr>";
					
						
				for ($i=0; $i < $numCourses; $i++;) {
					echo 	"<tr>";
					echo 		"<td>" . a_courseIds[$i] . "</td>";
					echo 		"<td>" . a_courseNames[$i] . "</td>";
					echo 		"<td>" . a_grades[$i] . "</td>";
					echo 	"</tr>"
				}
				
				echo	"</table>";		
			?>
		</div>

	</div>
	<!-- End of Content -->

    <!-- Footer -->
    <?php include '../templates/footer.php' ?>

</body>