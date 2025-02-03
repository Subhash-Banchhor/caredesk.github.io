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
            echo"<script>window.location='admin.php'</script>";
        }
        $a=$_SESSION['name'];
        echo "<p>Admin :- $a";
        ?>
        <nav>
            <a href="logout.php">Logout</a>
        </nav>
    </div>
    <div class="main3">
        <div class="menu">
        <a href="admin_dashboard.php">Dashboard</a><br>
        <a href="pending.php" id="active">Pending Complaints</a><br>
        <a href="accepted.php">Accepted Complaints</a><br>
        <a href="rejected.php">Rejected Complaints</a><br>
        <a href="all_comp.php">All Complaints</a>
        </div>
        <div class="dash">
            <div class="info">
                <h2>Pending complaints</h2>
                <table>
                <th>Complaint Id</th>
                <th>Complainant</th>
                <th>Complaint</th>
                <th>Action</th>
            <?php

$con=mysqli_connect("localhost","root","seedit","example",3307);

$q="select * from complaint where reply='pending'";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result)){

    echo"
        <tr><td>$row[C_ID]</td>
        <td>$row[UserName]</td>
    <td>$row[Complaint]</td>
    <td><a href='accept.php?id=$row[C_ID]' class='g'>Accept</a>
    <a href='reject.php?id=$row[C_ID]' class='r'>Reject</a></td></tr>
    ";
}
?>
</table>
            </div>
        </div>
    </div>
    </body>
    </html>
