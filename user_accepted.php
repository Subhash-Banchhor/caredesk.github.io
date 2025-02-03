<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accepted Complaints</title>
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
        <a href="user_dashboard.php">Dashboard</a><br>
        <a href="user_complaint.php">Make a Complaint</a><br>
        <a href="user_accepted.php" id="active">Accepted Complaints</a><br>
        <a href="user_rejected.php">Rejected Complaints</a><br>
        <a href="user_all_comp.php">All Complaints</a>
        </div>
        <div class="dash">
        <div class="info">
                <h2>Accepted complaints</h2>
                <table>
                <th>Complaint Id</th>
                <th>Complaint</th>
                <th>Action</th>
            <?php

$con=mysqli_connect("localhost","root","seedit","example",3307);

$q="select * from complaint where reply='accepted' and UserName = '$name'";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result)){

    echo"
        <tr><td>$row[C_ID]</td>
    <td>$row[Complaint]</td>
    <td>$row[Reply]</td><br>
    ";
}
?>
</table>
            </div>
        </div>
    </div>
    </body>
    </html>