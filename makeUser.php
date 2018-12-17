<?php
  // Create connection
    $conn = new mysqli('localhost', 'jada1750', '23591750', 'jada1750');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $em = $_GET["em"];
    $pw = $_GET["pw"];
    $fn = $_GET["fn"];
    $ln = $_GET["ln"];

    $sql = "CALL createUser('$em', '$pw', '$fn', '$ln')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
    $conn->close();
?>