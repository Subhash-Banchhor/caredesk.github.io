<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Pending Page</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
<div class="navbar" id="navbar">
        <div class="logo"><img src="images/logo1.jpg" alt=""></div>
        <?php
        session_start();
        if(isset($_SESSION['name'])==false)
        {
            echo"<script>window.location='user_login.php'</script>";
        }
        $name=$_SESSION['name'];
        echo "<p>UserName :- $name";
        ?>
        <nav>
            <a href="logout.php">Logout</a>
        </nav>
    </div>
    <div class="main3">
    <div class="menu">
        <a href="user_dashboard.php" >Dashboard</a><br>
        <a href="user_complaint.php" id="active">Make a Complaint</a><br>
        <a href="user_accepted.php">Accepted Complaints</a><br>
        <a href="user_rejected.php">Rejected Complaints</a><br>
        <a href="user_all_comp.php">All Complaints</a>
        </div>
        <div class="dash">
            <div class="info">
            <?php
$a=$_GET['comp'];

$con=mysqli_connect('localhost','root','seedit','example',3307);

$q="insert into complaint values(NULL,'$name','$a', 'pending')";

$rs=mysqli_query($con,$q);

if($rs){
    echo"<text>Complaint Registered Succesfully</text><br>
    <a href='user_complaint.php'><input type='submit' value='Back' id='submit'></a>";
}else{
    echo"<text>Complaint Registration Failed</text><br>
    <a href='user_complaint.php'><input type='submit' value='Back' id='submit'></a>";
}
?>
            </div>
        </div>
    </div>
    </body>
    </html>
