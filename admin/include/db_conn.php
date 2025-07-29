<?php
$servername = "localhost";
$username = "u809801411_milindsanstha";
$password = "5@R55rsdT6sX";
$dbname = "u809801411_milindsanstha";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};

// echo "Connected successfully";
?>
