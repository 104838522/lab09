<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "s104838522_db"; // Replace with your actual DB name

$conn = mysqli_connect($host, $username, $password, $database);

if (!$dbconn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
