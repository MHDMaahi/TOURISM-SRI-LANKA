<?php
// Connect to your database (edit with your DB credentials)
$host = "localhost";
$user = "root";
$password = "";
$database = "tourism"; // Change this to your actual database

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search query safely
$search = isset($_GET['query']) ? $conn->real_escape_string($_GET['query']) : '';

// Run a search query if input is not empty
if (!empty($search)) {
    $sql = "SELECT * FROM destinations WHERE name LIKE '%$search%' OR description LIKE '%$search%'";
    $result = $conn->query($sql);
    ?>
    <h2>Search Results for "<?php echo htmlspecialchars($search); ?>"</h2>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p>";
            echo "</div><hr>";
        }
    } else {
        echo "<p>No results found.</p>";
    }
} else {
    echo "<p>Please enter a search term.</p>";
}

$conn->close();
?>
