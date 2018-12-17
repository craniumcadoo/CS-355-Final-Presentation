<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','jada1750','23591750','jada1750');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"myDB");

$sql="SELECT ingredient FROM Ingredients WHERE ingredient LIKE '$q%'";
$result = mysqli_query($con,$sql);
echo '<option value="none">None</option>'; 
while($row = mysqli_fetch_array($result)) {
    echo '<option value="' . $row['ingredient'] . '">' . $row['ingredient'] . '</option>';
}
mysqli_close($con);
?>