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
    <link rel="stylesheet" href="">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <?php include '../templates/navbar.php' ?>
    </div>
    <!-- End of Navbar -->
	
	<!-- Content -->
	<div>
		<label for="semester">Select semester:</label>
		<select id="semester" name="semseterList" form="semseterForm">
			<option value="Fall 2019">Fall 2019</option>
			<option value="Winter 2020">Winter 2020</option>
		</select>
		
		<form method="POST" action="mygrades.php" id="semesterForm" name="viewSemester">
			<input type="submit">
		</form>
		
		<?php
			if(isset($_POST['viewSemester'])) {
				
			}
		?>
	</div>
	<!-- End of Content -->

    <!-- Footer -->
    <?php include '../templates/footer.php' ?>

</body>