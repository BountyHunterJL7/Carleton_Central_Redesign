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
							<h1>View Grades</h1>
							<p>View your grades for a chosen semester.</p>
						</div>
					</div>

		<div class="forms">
			<div>
				
				<form method="GET" action="mygrades_output.php" name="term">
					<select id="term" name="term">
						<option value="Fall 2019">Fall 2019</option>
						<option value="Winter 2020">Winter 2020</option>
					</select>
					<input type="submit" value="Submit" name="term">
				</form>
				
			</div>

			<div>
				<div class="info">
							<div class="titleText">
								<h1>Request Audit</h1>
								<p>Request an audit for your current program.</p>
							</div>
						</div>

				<form method="GET" action="myaudit_output.php" name="audit">
					<select id="auditTerm" name="audit">
						<option value="Undergrad">Undergrad</option>
						<option value="Graduate">Graduate</option>
					</select>
					<input type="submit" value="Submit">
				</form>
				
			</div>
		</div>

	</div>
	<!-- End of Content -->

    <!-- Footer -->
    <?php include '../templates/footer.php' ?>

</body>