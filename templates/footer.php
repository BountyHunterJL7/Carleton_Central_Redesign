<?php
echo '
    <style>
    .footer {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    
        margin-top: 0%;
        padding: 12%;
    
        align-items: baseline;
    }
    .footer > img {
        width: 40%;
    
        height: auto;
        margin: 0 auto;
    }
    
    .footerDiv {
        width: 61%;
        
        display: flex;
        align-items: baseline;
        justify-content: space-evenly;
    }
    
    .footer > .footerDiv > a {
        /* width: 61%; */
    
        text-decoration: underline;
        color: white;
        font-size: 1.1em;
    }
    .footer > .footerDiv > h3 {
        /* width: 30%; */
    
        color: white;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
        font-weight: lighter;
        font-size: 1.1em;
    } 
    </style>

    <div class="footer">
            <img
                id="header-logo"
                src="../media/carleton_university_logo_white.png"
            />
            <div class="footerDiv">
                <a href="" class="">Terms and conditions</a>
                <h3>Copyright Group 5</h3>
            </div>
    </div>

';


?>