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
					<h1>Submit an Audit for <?php echo $_GET['audit']; ?> Students</h1>
					<p>Click <b>Run Audit</b> to run an audit against your latest degree program.</p>
					<p>Click <b>What-If?</b> to to find out how your courses would apply if you changed program elements.</p>
				</div>
			</div>

			<div class="forms">
				<form>
					<input type="checkbox" name = "1" id = "1">
					<label for="1">Include Hypothetical Courses</label>
					<br>
					<p>Requirements</p>
					<select>
						<option>List All</option>
						<option>Incomplete</option>
						<option>Complete</option>
					</select>
					<br>
					<input type="submit" value="Run Audit">
					<br>
					<input type="submit" value="What-If?">
				</form>	
			</div>
		</div>

	</div>
	<!-- End of Content -->

    <!-- Footer -->
    <?php include '../templates/footer.php' ?>

</body>