<head>
    <title>Carleton Central | Awards</title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="../css/global.css" />

    <!-- Link to side stylesheet -->
    <link rel="stylesheet" href="" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <?php include '../templates/navbar.php' ?>
    </div>
    <!-- End of Navbar -->


    <!-- Content -->
    <div>
        <h1>
            Award Online Application
        </h1>

        <!-- Search bar -->
        <input type="text" placeholder="Search..">

        <!-- Drop down lists -->
        <form action="/action_page.php">
            <select name="courseLevel">
                <option value="courseLevel">Course Level</option>
            </select>
            <br><br>

            <select name="faculty">
                <option value="faculty">Faculty</option>
            </select>
            <br><br>

            <select name="program">
                <option value="program">Program</option>
            </select>
        </form>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        </p>

        <!-- List thingy -->
        <ul>
            <li><input type="checkbox" name="">Lorem<button type="button">Apply</button></li>
            <li><input type="checkbox" name="">Lorem<button type="button">Apply</button></li>
            <li><input type="checkbox" name="">Lorem<button type="button">Apply</button></li>
            <li><input type="checkbox" name="">Lorem<button type="button">Apply</button></li>
            <li><input type="checkbox" name="">Lorem<button type="button">Apply</button></li>
            <li><input type="checkbox" name="">Lorem<button type="button">Apply</button></li>
        </ul>

        
    </div>
    <!-- End of Content -->
    
    <!-- Footer -->
    <div>


    </div>
    <!-- End of Footer -->
    
</body>