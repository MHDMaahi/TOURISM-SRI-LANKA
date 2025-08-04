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

// Fetch reviews
$sql = "SELECT id, name, rating, comment, created_at FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='review'>";
        echo "<h3>" . htmlspecialchars($row['name']) . " - " . htmlspecialchars($row['rating']) . " Stars</h3>";
        echo "<p>" . htmlspecialchars($row['comment']) . "</p>";
        echo "<small>Submitted on " . htmlspecialchars($row['created_at']) . "</small>";

        // Delete button with review ID
        echo "<form action='delete_review.php' method='post' style='display:inline;'>";
        echo "<input type='hidden' name='review_id' value='" . htmlspecialchars($row['id']) . "'>";
        echo "<button type='submit' onclick='return confirm(\"Are you sure you want to delete this review?\")'>Delete</button>";
        echo "</form>";

        echo "</div>";
    }
} else {
    echo "<p>No reviews yet. Be the first to submit one!</p>";
}

$conn->close();
?>
