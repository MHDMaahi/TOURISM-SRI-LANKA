<?php
$servername = "localhost";
$username = "root";        // default for XAMPP
$password = "";            // default is empty
$database = "admin";       // same as above SQL

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
