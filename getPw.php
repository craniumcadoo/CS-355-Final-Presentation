<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','jada1750','23591750','jada1750');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"myDB");

$sql="call checkPw('$q')";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo $row['password'];
}

mysqli_close($con);
?>