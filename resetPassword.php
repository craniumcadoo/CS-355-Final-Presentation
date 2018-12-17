<?php
$em = $_GET['em'];
$pw = $_GET['pw'];

$con = mysqli_connect('localhost','jada1750','23591750','jada1750');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"myDB");
$sql="UPDATE Users SET password = '$pw' where email = '$em'";
$result = mysqli_query($con,$sql);
mysqli_close($con);
?>