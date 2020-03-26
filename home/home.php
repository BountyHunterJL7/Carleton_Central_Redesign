<head>
	<title>Carleton Central | Home</title>

	<!-- Google font import -->
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">

	<!-- Link to global stylesheet -->
	<link rel="stylesheet" href="../css/global.css" />

	<!-- Link to side stylesheet -->
	<link rel="stylesheet" href="./home.css" />

	<!-- Page icon -->
	<link rel="shortcut icon" href="../media/carleton_mini_logo.png">

	<!-- Include Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<script>
		console.log($('#footer1'));

		$(document).ready(function() {
			$('#footer1').css('display', 'none');
		});
	</script>

</head>

<body>
	<!-- Header -->
	<div class="cu-navbar">
		<?php include '../templates/navbar.php' ?>
	</div>

	<!-- Content -->
	<div class="flex content">
		<!-- Left section -->
		<div class="flex left">
			<div class="flex rounded shadow-medium calendar-section">
				<div class="flex top">
					<h1 id="date-title">
						<?php
						echo date("M d");
						?>
					</h1>
				</div>
				<div class="flex bottom">
					<iframe id="google-calendar" src="https://calendar.google.com/calendar/embed?height=200&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FToronto&amp;showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTz=0&amp;showCalendars=0&amp;showTabs=0" style="border-width:0; flex: auto;" width="auto" height="auto" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>

			<!-- Profile section -->
			<div class="flex rounded shadow-medium profile-section">
				<div id="profile-header">
					<img class="shadow-strong" id="profile-image" src="../media/home/sample_profile_image.jpeg" />
					<div id="profile-image-background"></div>
				</div>

				<!-- Name -->
				<h2 class="text" id="profile-name">
					<?php
					echo $_SESSION['fname'] . " " . $_SESSION['lname'];
					?>

					<!-- FOR TESTING CSS -->
					Mark McGregor
				</h2>

				<div id="profile-information">
					<table>
						<!-- Student ID -->
						<tr id="id-row">
							<td>
								<p class="text" id="id-title">Student ID</p>
							</td>

							<td>
								<p class="text" id="id">
									<?php
									echo $_SESSION['fname'] . " " . $_SESSION['id'];
									?>

									<!-- FOR TESTING CSS -->
									101108410
								</p>
							</td>
						</tr>

						<!-- Email -->
						<tr id="cmail-row">
							<td>
								<p class="text" id="email-title">Cmail</p>
							</td>

							<td>
								<p class="text" id="email">
									<?php
									echo $_SESSION['fname'] . " " . $_SESSION['email'];
									?>

									<!-- FOR TESTING CSS -->
									markmcgregor@cmail.carleton.ca
								</p>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- Middle section -->
		<div class="flex middle">
			<div class="flex rounded shadow-small timetable-section section" onclick="window.location = '../registration/registration.php'">
				<div id="timetable-section-button" class="button rounded shadow-small">
					<h1>Student Timetable</h1>
				</div>
			</div>

			<div class="flex rounded shadow-small progress-section section" onclick="window.location = '../studentRecords/studentRecords.php'">
				<div id="progress-section-button" class="button rounded shadow-small">
					<h1>Academic Progress</h1>
				</div>
			</div>

			<div class="flex rounded shadow-small amountToPay-section section" onclick="window.location = '../studentRecords/studentRecords.php'">
				<div id="amountToPay-section-button" class="button rounded shadow-small">
					<h1>Amount to Pay</h1>
				</div>
			</div>
		</div>

		<!-- Right section -->
		<div class="flex right">
			<div class="flex rounded shadow-small news">
				<div class="news-header">
					<h1>News</h1>
				</div>

				<ul class="news-list flex">
					<?php include '../templates/news-items.php' ?>
				</ul>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include '../templates/footer.php' ?>
</body>