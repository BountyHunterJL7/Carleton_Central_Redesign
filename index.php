<?php require_once('server/server.php'); ?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Carleton Central | Login</title>
    
    <link rel="stylesheet" type="text/css" href="./css/login.css" />

    <!-- Page icon -->
    <link rel="shortcut icon" href="./media/carleton_mini_logo.png">

    <meta charset="utf-8" />
</head>

<body>
	<form method="POST" action="index.php">
		
		<div class="container">
		
			<div class="loginbox">
			
				<div class="imgcontainer">
					<img src="logo.png" alt="Logo" class="logo" />
				</div>					
				
				<div>
					<input
						type="text"
						placeholder="Username"
						name="username"
						required
					/>	
				</div>
				
				<div>
                    <input
                        type="password"
                        placeholder="Password"
                        name="password"
                        required
                    />
                </div>
				
				<div class="loginbutton">
                    <button type="submit" name="login_user">Login</button>
                </div>
				
                <label>
                    <input
                        type="checkbox"
                        checked="checked"
                        name="remember"
                    />
                    Remember me
                </label>

                <div class="paslink">
                    <span class="password"><a href="#">Forgot password</a></span>
                </div>
			
			
			</div>
			
		
		</div>
	</form>
</body>
</html>
