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

// Fetch all reviews
$sql = "SELECT name, rating, comment FROM reviews ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - Reviews</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 40px;
        }

        h1, h2 {
            text-align: center;
            color:rgb(203, 16, 16) ;
            
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .review-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        .review-form input,
        .review-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .review-form button {
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            border: none;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .review-form button:hover {
            background-color: #218838;
        }

        .reviews {
            margin-top: 20px;
        }

        .review {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 5px solid #28a745;
            border-radius: 5px;
        }

        .review h3 {
            margin: 0 0 10px;
        }

        .rating {
            color: #f39c12;
            margin-bottom: 10px;
        }

        .star {
            color: #f39c12;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About Us</h1>

        <div class="review-form">
            <h2>Leave a Review</h2>
            <form action="submit_review.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="number" name="rating" placeholder="Rating (1-5)" min="1" max="5" required>
                <textarea name="comment" placeholder="Your Comment" rows="4" required></textarea>
                <button type="submit">Submit Review</button>
            </form>
        </div>

        <div class="reviews">
            <h2>User Reviews</h2>
            <?php
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $stars = str_repeat('★', intval($row['rating'])) . str_repeat('☆', 5 - intval($row['rating']));
                    echo "<div class='review'>";
                    echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
                    echo "<div class='rating'><span class='star'>{$stars}</span></div>";
                    echo "<p>" . nl2br(htmlspecialchars($row['comment'])) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No reviews found. Be the first to submit one!</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
