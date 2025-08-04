<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "reviews";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if review_id is set
if (isset($_POST['review_id'])) {
    $review_id = intval($_POST['review_id']);

    // Delete review query
    $sql = "DELETE FROM reviews WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $review_id);

    if ($stmt->execute()) {
        echo "<script>alert('Review deleted successfully');</script>";
    } else {
        echo "<script>alert('Failed to delete review');</script>";
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();

// Redirect back to the main page (where reviews are displayed)
header("Location: about.php");



exit;
?>
