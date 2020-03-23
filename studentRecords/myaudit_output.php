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
							<h1>Submit an Audit for <?php $_GET['auditTerm']; ?></h1>
							<p>Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat</p>
						</div>
					</div>

		<div class="forms">
			<div>
				<div class="info">
							<div class="titleText">
								<h1>Request Audit</h1>
								<p>Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat Lorum ipsum dolar type beat</p>
							</div>
						</div>

				<select id="semester" name="semseterList" form="semseterForm">
				<option value="0">Select a Semester</option>
						<option value="Fall 2019">Fall 2019</option>
						<option value="Winter 2020">Winter 2020</option>
				</select>

				<form method="POST" action="mygrades.php" id="semesterForm" name="viewSemester">
						<input type="submit">
					</form>
			</div>
		</div>

	</div>
	<!-- End of Content -->

    <!-- Footer -->
    <?php include '../templates/footer.php' ?>

</body>