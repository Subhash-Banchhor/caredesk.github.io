<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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
        <a href="user_dashboard.php" id="active">Dashboard</a><br>
        <a href="user_complaint.php">Make a Complaint</a><br>
        <a href="user_accepted.php">Accepted Complaints</a><br>
        <a href="user_rejected.php">Rejected Complaints</a><br>
        <a href="user_all_comp.php">All Complaints</a>
        </div>
        <div class="dash">
            <div class="boxes" id="a"><p>
            <?php

$con=mysqli_connect("localhost","root","seedit","example",3307);

$a="select Count(*) as count from complaint where Reply = 'pending' and UserName = '$name'";
$rs=mysqli_query($con,$a);

while($row=mysqli_fetch_array($rs)){

    echo"<p>Pending Complaints:<br> 
       $row[count]";
}
?>
            </p></div>
            <div class="boxes" id="b"><p>
<?php
$b="select Count(*) as count from complaint where Reply = 'Accepted' and UserName = '$name'";
$rs=mysqli_query($con,$b);

while($row=mysqli_fetch_array($rs)){

    echo"<p>Accepted Complaints:<br> 
        $row[count]";
}
?>
            </p></div>
            <div class="boxes" id="c"><p>
<?php
$c="select Count(*) as count from complaint where Reply = 'Rejected' and UserName = '$name'";
$rs=mysqli_query($con,$c);

while($row=mysqli_fetch_array($rs)){

    echo"<p>Rejected Complaints:<br> 
       $row[count]";
}
?>
            </p></div>
            <div class="boxes" id="d"><p>
<?php
$d="select Count(*) as count from complaint where UserName = '$name'";
$rs=mysqli_query($con,$d);

while($row=mysqli_fetch_array($rs)){

    echo"<p>All Complaints:<br> 
       $row[count]";
}
?>
            </p></div><br>
            <div class="info">
                <h3>Here are crucial guidelines for the Users:</h3>
                <ol type="1">
                    <li><B>Be Clear and Concise</B>: Describe your issue with relevant facts (dates, times, names).</li>
                    <li><b>Stay Professional</b>: Use respectful language for effective communication.</li>
                    <li><b>Attach Supporting Documents</b>: Include relevant files (receipts, photos) for faster resolution.</li>
                    <li><b>Select the Right Category</b>: Choose the appropriate category to reach the right team.</li>
                    <li><b>Be Honest and Accurate</b>: Provide truthful details to avoid delays.</li>
                    <li><b>Monitor for Updates</b>: Check for responses; avoid submitting duplicate complaints.</li>
                    <li><b>Respect Resolution Times</b>: Allow time for investigation based on complaint complexity.</li>
                    <li><b>Keep Sensitive Info Private</b>: Avoid sharing confidential details publicly.</li>
                    <li><b>Follow Platform Policies</b>: Adhere to terms and community guidelines.</li>
                    <li><b>Understand Your Rights</b>: Be aware of consumer rights and platform limitations.</li>
                    <p></p>
                </ol>
            </div>
        </div>
    </div>
    </body>
    </html>