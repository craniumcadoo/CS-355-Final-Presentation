<?php
// the message
$em = $_GET["em"];
$msg = $_GET["msg"];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
// send email
mail($em,"Grocery list",$msg);
?>