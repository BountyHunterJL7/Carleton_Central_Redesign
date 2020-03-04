<head>
	<title>Carleton Central | Home</title>
	<!-- Link to global stylesheet -->
	<link rel="stylesheet" href="../css/global.css" />

	<!-- Link to side stylesheet -->
	<link rel="stylesheet" href="./home.css" />

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
	<!-- Header -->
	<div class="navbar">
		<?php include '../templates/navbar.php' ?>
	</div>

	<!-- Content -->
	<div class="flex content">
		<!-- Left section -->
		<div class="flex left">
			<div class="flex rounded shadow-medium calendar-section">
				<div class="flex top"></div>
				<div class="flex bottom"></div>
			</div>

			<!-- Profile section -->
			<div class="flex rounded shadow-medium profile-section">
				<img id="profile-image" src="../media/home/profile_image.jpg" />
			</div>
		</div>

		<!-- Middle section -->
		<div class="flex middle">
			<div class="flex rounded shadow-small schedule-section"></div>
			<div class="flex rounded shadow-small progress-section"></div>
			<div class="flex rounded shadow-small amountToPay-section"></div>
		</div>

		<!-- Right section -->
		<div class="flex right">
			<div class="flex rounded shadow-small news">
				<div class="news-header">
					<h1>News</h1>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="flex footer">
		Footer goes here
	</div>
</body>