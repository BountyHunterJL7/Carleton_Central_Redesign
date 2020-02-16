<?php
$host="ugrad.bitdegree.ca";
$user="brandonwhite";
$password="5CsxuWE31A";
$db="CCdata";

mysql_connect($host,$user,$password);
mysql_select_db($db)

if(isset($_POST['uname'])){
    $username=$_POST['uname'];
    $password=$_POST['psw'];

    $sql = "select * from CCdata where username='".$username."' AND pass='".$password."'
    limit 1";

    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo "Welcome";
        exit();
    }
    else{
        echo "Wrong username or Password";
    }
}

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Carleton Central | Login</title>
    
    <link rel="stylesheet" type="text/css" href="./css/login.css" />

    <!-- Page icon -->
    <link rel="shortcut icon" href="../media/carleton_mini_logo.png">

    <meta charset="utf-8" />
    <title></title>
</head>

<body>
    <form action="#" method="POST">
        <div class="container">
            <div class="loginbox">
                <div class="imgcontainer">
                    <img src="logo.png" alt="Logo" class="logo" />
                </div>

                <div>
                    <input
                        type="text"
                        placeholder="Username"
                        name="uname"
                        required
                    />
                </div>

                <div>
                    <input
                        type="password"
                        placeholder="Password"
                        name="psw"
                        required
                    />
                </div>

                <div class="loginbutton">
                    <button type="submit">Login</button>
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
                    <span class="psw"><a href="#">Forgot password</a></span>
                </div>
                <div class="reglink">
                    <span class="rgstr"><a href="#">Register</a></span>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
