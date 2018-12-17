<?php
  // Create connection
    $conn = new mysqli('localhost', 'jada1750', '23591750', 'jada1750');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $em = $_GET["em"];
    $day = $_GET["day"];
    $it1 = $_GET["it1"];
    $it2 = $_GET["it2"];
	$it3 = $_GET["it3"];
	$it4 = $_GET["it4"];
	$it5 = $_GET["it5"];
	$it6 = $_GET["it6"];
	$it7 = $_GET["it7"];
	$it8 = $_GET["it8"];
	$it9 = $_GET["it9"];
	$it10 = $_GET["it10"];

    $sql = "CALL addItems('$em', '$day', '$it1', '$it2', '$it3', '$it4', '$it5', '$it6', '$it7', '$it8', '$it9', '$it10')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
    $conn->close();
?>