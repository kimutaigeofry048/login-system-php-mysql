<?php
// Set database credentials
$host = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
