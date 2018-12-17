<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','jada1750','23591750','jada1750');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"myDB");

$sql="call getPrices('$q')";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>Store A</th>
<th>Store B</th>
<th>Store B</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td id ='StoreA'>" . $row['price1'] . "</td>";
    echo "<td id ='StoreB'>" . $row['price2'] . "</td>";
    echo "<td id ='StoreC'>" . $row['price3'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>