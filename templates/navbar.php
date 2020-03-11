<?php
echo '
	<script src="https://use.fontawesome.com/7f0bcd1195.js"></script>

	<style>
	.cu-navbar {
		display: flex;
		height: 5em;
		margin:0;
		background-color: var(--main-black);
	}
	
	.cu-navbar > .left {
		width: 14em;
		display: flex;
	}
	
	.cu-navbar #header-logo {
		margin: auto;
		width: 10em;
		display: flex;
	}
	.cu-navbar > .left > a {
		margin: auto;
	
		max-width: 100%;
		height: auto;
	}
	
	.cu-navbar > .middle {
		justify-content: start;
		align-items: center;
	}
	
	.cu-navbar > .middle > a {
		padding: .3em;
		padding-left: .5em;
		padding-right: .5em;
	
		border-radius: .3em;
		margin: auto;
		color: white;
		text-decoration: none;
		font-size: 1.1em;
		text-align: center;
	}
		.cu-navbar > .middle > a:hover {
			background-color: var(--main-red);
		}
	
	.cu-navbar > .right {
		width: 2em;
	}
	
	/* Over 1024px, we dont want the hamburger icon to appear */
	.icon {
		display: none;
	}
	
	/* When the screen gets too small, these rules will apply */
	@media only screen and (max-width: 1024px) {
		.cu-navbar > .middle > a {
			display: none;
		}
	
		/* Class to apply after clicking hamburger button */
		.cu-navbar > .middle > .afterClick {
			/*After click*/
			color: black;
			display: block;
			position: relative;
			width: 100%;
			text-align: left;
			background-color: #c1c1c1;
			padding: 10px 0px 10px 10px;
			border-radius: 0px;
		}
	
		.navTitle {
			display: block;
		}
	
		.cu-navbar > .right > .icon {
			display: flex;
		}
	
		.cu-navbar > .right > .icon {
			text-decoration: none;
			padding: 1.5em;
		}
	
		.displayOrNot {
			display: none;
		}
		
		.cu-navbar > .right {
			width: 6em;
		}
	
		.cu-navbar > .displayAsList  {
			/*After click*/
			margin-top: 80px;
			z-index: 2;
			flex-wrap: wrap;
		}
	  }
	</style>

	<div class="left">
            <a href="../home/home.php">
                <img
                    id="header-logo"
                    src="../media/carleton_university_logo_white.png"
                />
            </a>
        </div>
        
        <div class="flex middle" id="navigationDiv">
            <a href="../PersonalInfo/PersonalInformation.php" class="topNav">Personal Info</a>

            <a href="../studentRecords/studentRecords.php" class="topNav">Student Records</a>

            <a href="../registration/registration.php" class="topNav">Registration</a>

            <a href="../awards/awards.php" class="topNav">Awards/Financial Assistance</a>

            <a href="../my-success/mysuccess.php" class="topNav">MySuccess</a>

            <a href="../housing/housing.php" class="topNav">Housing</a>

            <a href="" class="topNav">Logout</a>
        </div>

        <div class="right">
            <a href="javascript:void(0);" class="icon" onclick="doHeader()">
                <i class="fa fa-bars fa-2x" id="hamburgerButton" style="color:#fff;"></i>
                <i class="fa fa-times fa-2x" id="xButton" style="color:#fff; display: none;"></i>
            </a>
        </div>
	</div>
	
	<script>
	function doHeader() {

		//Find all the navigation buttons and store them in a variable
		var navElements = document.querySelectorAll(".topNav");
	
		//Find the div that encompasses the navigation
		var navDiv = document.getElementById("navigationDiv");
	
		//Get the hamburger buttons and store them in variables
		var hamburgerButton = document.getElementById("hamburgerButton");
		var xButton = document.getElementById("xButton");
	
		//Loop through the elements of navigation when the user clicks on the hamburger menu
		for (var i = 0 ; i < navElements.length ; i++) {
	
			//If the nav elements dont have the "after click" class, apply it
			//This class contains styling rules that apply to the mobile view
			if (navElements[i].className === "topNav") {
				navElements[i].className += " afterClick";
	
				//Hide the hamburger button and show the x button
				xButton.style.display = "inline-block"; 
				hamburgerButton.style.display = "none"; 
			//If the nav elements already have the class and the hamburger menu is clicked
			//take off the "afterClick" class
			} else {
				navElements[i].className = "topNav";
	
				//Hide the x button and show the hamburger button
				hamburgerButton.style.display = "inline-block"; 
				xButton.style.display = "none"; 
			}
		}
	
		//Apply the display as displayAsList
		if (navDiv.className === "flex middle") {
			navDiv.className += " displayAsList";
		}
	}
	//End of function header
	
	</script>

	
';
?>