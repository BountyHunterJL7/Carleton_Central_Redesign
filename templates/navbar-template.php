<?php
echo '
	<style>
	.navbar {
		display: flex;
		height: 5em;
		background-color: var(--main-black);
	}
	
	.navbar > .left {
		width: 14em;
		display: flex;
	}
	
	.navbar #header-logo {
		margin: auto;
		width: 10em;
		display: flex;
	}
	.navbar > .left > a {
		margin: auto;
	
		max-width: 100%;
		height: auto;
	}
	
	.navbar > .middle {
		justify-content: start;
		align-items: center;
	}
	
	.navbar > .middle > a {
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
		.navbar > .middle > a:hover {
			background-color: var(--main-red);
		}
	
	.navbar > .right {
		width: 2em;
	}
	
	/* Over 1024px, we dont want the hamburger icon to appear */
	.icon {
		display: none;
	}
	
	/* When the screen gets too small, these rules will apply */
	@media only screen and (max-width: 1024px) {
		.navbar > .middle > a {
			display: none;
		}
	
		/* Class to apply after clicking hamburger button */
		.navbar > .middle > .afterClick {
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
	
		.navbar > .right > .icon {
			display: flex;
		}
	
		.navbar > .right > .icon {
			text-decoration: none;
			padding: 1.5em;
		}
	
		.displayOrNot {
			display: none;
		}
		
		.navbar > .right {
			width: 6em;
		}
	
		.navbar > .displayAsList  {
			/*After click*/
			margin-top: 80px;
			z-index: 2;
			flex-wrap: wrap;
		}
	  }
	</style>

	<div class="left">
            <a href="../home/index.html">
                <img
                    id="header-logo"
                    src="../media/carleton_university_logo_white.png"
                />
            </a>
        </div>
        
        <div class="flex middle" id="navigationDiv">
            <a href="http://ugrad.bitdegree.ca/~brandonwhite/PersonalInformation.php" class="topNav">Personal Info</a>

            <a href="../studentRecords/studentRecords.html" class="topNav">Student Records</a>

            <a href="../registration/registration.html" class="topNav">Registration</a>

            <a href="../awards/awards.html" class="topNav">Awards/Financial Assistance</a>

            <a href="../my-success/mysuccess.html" class="topNav">MySuccess</a>

            <a href="../housing/housing.html" class="topNav">Housing</a>

            <a href="" class="topNav">Logout</a>
        </div>

        <div class="right">
            <a href="javascript:void(0);" class="icon" onclick="header()">
                <i class="fa fa-bars fa-2x" id="hamburgerButton" style="color:#fff;"></i>
                <i class="fa fa-times fa-2x" id="xButton" style="color:#fff; display: none;"></i>
            </a>
        </div>
	</div>
	
	<script>
	function header() {

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
