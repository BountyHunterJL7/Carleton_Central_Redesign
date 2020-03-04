<?php
echo '
	<style>
		navbar > .left {
			width: 26em;
			display: flex;
		}

		navbar #navbar-logo {
			margin: auto;
			width: 16em;
			display: flex;
		}
		navbar > .left > a {
			margin: auto;
		}

		navbar > .middle {
			justify-content: start;
		}

		navbar > .middle > a {
			padding: 0.3em;
			padding-left: 0.5em;
			padding-right: 0.5em;

			border-radius: 0.3em;
			margin: auto;
			color: white;
			text-decoration: none;
			font-size: 1.4em;
		}
		navbar > .middle > a:hover {
			background-color: var(--main-red);
		}

		navbar > .right {
			width: 15em;
		}
	</style>

	<div class="left">
		<a href="../home/index.php">
			<img
				id="navbar-logo"
				src="../media/carleton_university_logo_white.png"
			/>
		</a>
	</div>

	<div class="flex middle">
		<a href="http://ugrad.bitdegree.ca/~brandonwhite/PersonalInformation.php"
			>Personal Info</a
		>
		<a href="../studentRecords/studentRecords.php">Student Records</a>
		<a href="../registration/registration.php">Registration</a>
		<a href="../awards/awards.php">Awards/Financial Assistance</a>
		<a href="../my-success/mysuccess.php">MySuccess</a>
		<a href="../housing/housing.php">Housing</a>
	</div>

	<div class="right"></div>
';
