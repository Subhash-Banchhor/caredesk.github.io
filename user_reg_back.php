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
        <?php

$a=$_GET['name'];
$b=$_GET['pass'];
$c=$_GET['cont'];
$d=$_GET['email'];

$con=mysqli_connect('localhost','root','seedit','example',3307);

$q="insert into user values('$a','$b','$c','$d')";

$result=mysqli_query($con,$q);

if($result){
    echo"<text>Registered Succesfully</text><br>
    <a href='user_login.php'><input type='submit' value='Login' id='submit'></a>";
}else{
    echo"<text>Registration Failed</text><br>
    <a href='user_reg.php'><input type='submit' value='Register' id='submit'></a>";
}
?>
        </div>
    </div>
    </body>
    </html>
    