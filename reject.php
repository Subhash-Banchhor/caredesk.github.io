
<?php
$cid = $_GET["id"];

$con=mysqli_connect("localhost","root","seedit","example",3307);
$q="update complaint set reply='Rejected' where C_ID='$cid'";

$rs=mysqli_query($con,$q);

if($rs)
{
    echo "<script>window.location='pending.php'</script>";
}else{
    echo "Error Occured";
}
?>
