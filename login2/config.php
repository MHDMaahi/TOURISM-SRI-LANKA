<?php
$servername = "localhost";    // usually localhost for XAMPP
$username = "root";           // default username for XAMPP
$password = "";               // default password for XAMPP (leave blank)
$database = "admin";          // <-- change this if your DB is named something else

// Connect to MySQL

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
