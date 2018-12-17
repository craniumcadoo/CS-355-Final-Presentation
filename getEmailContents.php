<?php
  // Create connection
    $conn = new mysqli('localhost', 'jada1750', '23591750', 'jada1750');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $em = $_GET["em"];
	
    $sql = "SELECT * FROM DailyUserList WHERE email = '".$em."'";
$result = mysqli_query($conn,$sql);
	echo "<table>
<tr>
<th>Day of Week</th>
<th>Item 1</th>
<th>Item 2</th>
<th>Item 3</th>
<th>Item 4</th>
<th>Item 5</th>
<th>Item 6</th>
<th>Item 7</th>
<th>Item 8</th>
<th>Item 9</th>
<th>Item 10</th>
</tr>";
    while($row = mysqli_fetch_array($result)) {
		
	echo "<td>" . $row['dayOfWeek'] . "</td>";
    echo "<td name='item'>" . $row['item1'] . "</td>";
	echo "<td name='item'>" . $row['item2'] . "</td>";
	echo "<td name='item'>" . $row['item3'] . "</td>";
	echo "<td name='item'>" . $row['item4'] . "</td>";
	echo "<td name='item'>" . $row['item5'] . "</td>";
	echo "<td name='item'>" . $row['item6'] . "</td>";
	echo "<td name='item'>" . $row['item7'] . "</td>";
	echo "<td name='item'>" . $row['item8'] . "</td>";
	echo "<td name='item'>" . $row['item9'] . "</td>";
	echo "<td name='item'>" . $row['item10'] . "</td>";
    echo "</tr>";
}

echo "</table><br>Item Prices<br>";
    $conn->close();
?>