<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "reviews"; // Corrected database name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert review into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $stmt = $conn->prepare("INSERT INTO reviews (name, rating, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $rating, $comment);
    
    if ($stmt->execute()) {
        echo "<script>alert('Review submitted successfully');</script>";
    } else {
        echo "<script>alert('Failed to submit review');</script>";
    }

    $stmt->close();
}

// Redirect back to the main page after submission
header("Location: about.php");
exit();
?>
