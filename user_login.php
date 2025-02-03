<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Page</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
<div class="navbar" id="navbar">
        <div class="logo"><img src="images/logo1.jpg" alt=""></div>
        <nav>
        <a href="index.php">Home</a>
            <a href="user_login.php">User Login</a>
            <a href="user_reg.php">User Reg</a>
            <a href="admin.php">Admin</a>
        </nav>
    </div>
    <div class="main2">
        <div class="box">
            <h2>User Login</h2>
            <form action="user_login_back.php">
            <p>UserName: </p>
            <input type="text" placeholder="Enter UserName" name="name" id="text">
            <P>Password: </P>
            <input type="text" placeholder="Enter Password" name="pass" id="text"><br>
            <input type="submit" value="Login" id="submit">
            </form>
        </div>
    </div>
    </body>
    </html>