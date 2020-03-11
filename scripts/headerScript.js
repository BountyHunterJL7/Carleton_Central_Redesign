function header() {

    //Find all the navigation buttons and store them in a variable
    var navElements = document.querySelectorAll('.topNav');

    //Find the div that encompasses the navigation
    var navDiv = document.getElementById("navigationDiv");

    //Get the hamburger buttons and store them in variables
    var hamburgerButton = document.getElementById("hamburgerButton");
    var xButton = document.getElementById("xButton");

    //Loop through the elements of navigation when the user clicks on the hamburger menu
    for (var i = 0 ; i < navElements.length ; i++) {

        //If the nav elements don't have the "after click" class, apply it
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