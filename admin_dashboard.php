<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        <a href="admin_dashboard.php" id="active">Dashboard</a><br>
        <a href="pending.php">Pending Complaints</a><br>
        <a href="accepted.php">Accepted Complaints</a><br>
        <a href="rejected.php">Rejected Complaints</a><br>
        <a href="all_comp.php">All Complaints</a>
        </div>
        <div class="dash">
            <div class="boxes" id="a"><p>
            <?php

$con=mysqli_connect("localhost","root","seedit","example",3307);

$a="select Count(*) as count from complaint where Reply = 'pending'";
$rs=mysqli_query($con,$a);

while($row=mysqli_fetch_array($rs)){

    echo"<p>Pending Complaints:<br> 
       $row[count]";
}
?>
            </p></div>
            <div class="boxes" id="b"><p>
<?php
$b="select Count(*) as count from complaint where Reply = 'Accepted'";
$rs=mysqli_query($con,$b);

while($row=mysqli_fetch_array($rs)){

    echo"<p>Accepted Complaints:<br> 
        $row[count]";
}
?>
            </p></div>
            <div class="boxes" id="c"><p>
<?php
$c="select Count(*) as count from complaint where Reply = 'Rejected'";
$rs=mysqli_query($con,$c);

while($row=mysqli_fetch_array($rs)){

    echo"<p>Rejected Complaints:<br> 
       $row[count]";
}
?>
            </p></div>
            <div class="boxes" id="d"><p>
<?php
$d="select Count(*) as count from complaint";
$rs=mysqli_query($con,$d);

while($row=mysqli_fetch_array($rs)){

    echo"<p>All Complaints:<br> 
       $row[count]";
}
?>
            </p></div><br>
            <div class="info">
            <h3>Here are crucial guidelines for the Admin:</h3>
<ol type="1">
    <li><b>Acknowledge Complaints Immediately</b>  
        Send an automatic acknowledgment to each complainant, with a unique tracking ID and expected resolution timeframe.</li>
    <li><b>Classify and Prioritize Complaints</b>  
        Categorize complaints based on type and urgency, ensuring high-priority issues are addressed promptly.</li>
    <li><b>Establish Response and Resolution Timelines</b>  
        Set clear timelines for responding to and resolving complaints, based on complaint severity.</li>
    <li><b>Maintain Transparent Communication</b>  
        Keep complainants informed of their complaint status with regular updates, especially if there are delays.</li>
    <li><b>Document All Interactions</b> 
        Record every interaction, action, and resolution for each complaint to ensure accountability and traceability.</li>
    <li><b>Ensure Data Privacy and Security</b>  
        Protect complainants' personal data by securing the complaint management system and restricting access to authorized personnel.</li>
    <li><b>Analyze and Report on Complaint Trends</b>  
        Regularly review complaint trends to identify recurring issues, allowing for proactive improvements.</li>
    <li><b>Implement Quality Control Checks</b>  
        Conduct routine audits on complaint handling to ensure consistency and high-quality responses.</li>
    <li><b>Gather Post-Resolution Feedback</b>  
        Request feedback after resolving complaints to assess satisfaction and identify improvement areas.</li>
</ol>
            </div>
        </div>
    </div>
    </body>
    </html>