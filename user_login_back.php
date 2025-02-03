<?php
$a=$_GET['name'];
$b=$_GET['pass'];

$con=mysqli_connect('localhost','root','seedit','example',3307);

$q= "select * from user where UserName='$a' and Password='$b'";

$rs= mysqli_query($con,$q);

if($rs=mysqli_fetch_array(result: $rs))
{
    session_start();
    $_SESSION["name"]=$a;
    echo"<script>window.location='user_dashboard.php'</script>";
    }
    else{
        echo "Wrong Login ID/Password";
    }