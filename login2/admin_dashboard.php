<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

include('../php/conn.php');

$bookings = mysqli_query($conn, "SELECT * FROM book_form");
$contacts = mysqli_query($conn, "SELECT * FROM contact_form ORDER BY created_at DESC");

// Stats
$totalBookings = mysqli_num_rows($bookings);
$pendingBookings = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM book_form WHERE status IS NULL OR status = 'pending'"));
$confirmedBookings = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM book_form WHERE status = 'confirmed'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9;
            display: flex;
        }

        .sidebar {
            width: 220px;
            background: #343a40;
            color: white;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
        }

        .sidebar h2 {
            font-size: 22px;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px 0;
            text-decoration: none;
            transition: background 0.2s;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .main {
            flex: 1;
            padding: 30px;
        }

        .stats {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
            text-align: center;
        }

        .card h3 {
            margin: 0;
            font-size: 18px;
            color: #555;
        }

        .card p {
            font-size: 24px;
            color: #007bff;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #eee;
        }

        table th {
            background: #007bff;
            color: white;
        }

        .confirmed {
            color: green;
            font-weight: bold;
        }

        form {
            margin-top: 30px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        form textarea {
            grid-column: span 2;
        }

        input, textarea, select, button {
            padding: 10px;
            font-size: 14px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            grid-column: span 2;
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }

        .logout {
            margin-top: 20px;
            display: inline-block;
            background: #dc3545;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
        }

        .logout:hover {
            background: #c82333;
        }

        .section-title {
            margin-top: 40px;
            margin-bottom: 10px;
            color: #333;
        }
    </style>
    <!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="#">Dashboard</a>
        <a href="#">Bookings</a>
        <a href="#">Contacts</a>
        <a class="logout" href="logout.php">Logout</a>
    </div>
    <div class="main">
        <h1>Welcome, Admin</h1>

        <div class="stats">
            <div class="card">
                <h3>Total Bookings</h3>
                <p><?= $totalBookings ?></p>
            </div>
            <div class="card">
                <h3>Pending</h3>
                <p><?= $pendingBookings ?></p>
            </div>
            <div class="card">
                <h3>Confirmed</h3>
                <p><?= $confirmedBookings ?></p>
            </div>
        </div>

        <h2 class="section-title">Bookings</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Phone</th>
                    <th>Guests</th><th>Rooms</th><th>Arrival</th><th>Leave</th>
                    <th>Status</th><th>Delete</th><th>Confirm</th>
                </tr>
            </thead>
            <tbody>
                <?php mysqli_data_seek($bookings, 0); while($b = mysqli_fetch_assoc($bookings)): ?>
                <tr>
                    <td><?= $b['id'] ?></td>
                    <td><?= htmlspecialchars($b['name']) ?></td>
                    <td><?= htmlspecialchars($b['email']) ?></td>
                    <td><?= htmlspecialchars($b['phone']) ?></td>
                    <td><?= $b['guests'] ?></td>
                    <td><?= $b['rooms'] ?></td>
                    <td><?= $b['arrivals'] ?></td>
                    <td><?= $b['leaving'] ?></td>
                    <td><?= $b['status'] ?? 'pending' ?></td>
                    <td><a href="delete_booking.php?id=<?= $b['id'] ?>" onclick="return confirm('Delete this booking?')">Delete</a></td>
                    <td>
                        <?php if ($b['status'] != 'confirmed'): ?>
                            <a href="confirm_booking.php?id=<?= $b['id'] ?>" onclick="return confirm('Confirm this booking?')">Confirm</a>
                        <?php else: ?>
                            <span class="confirmed">Confirmed</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <h2 class="section-title">Add New Booking</h2>
        <form method="POST" action="add_booking.php">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="text" name="location" placeholder="Location" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="number" name="guests" placeholder="Guests" required>
            <input type="number" name="rooms" placeholder="Rooms" required>
            <input type="date" name="arrivals" required>
            <input type="date" name="leaving" required>
            <button type="submit">Add Booking</button>
        </form>

        <h2 class="section-title">Contact Messages</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php while($c = mysqli_fetch_assoc($contacts)): ?>
                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= htmlspecialchars($c['name']) ?></td>
                    <td><?= htmlspecialchars($c['email']) ?></td>
                    <td><?= htmlspecialchars($c['subject']) ?></td>
                    <td><?= nl2br(htmlspecialchars($c['message'])) ?></td>
                    <td><?= $c['created_at'] ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <h2 class="section-title">Send Contact Message</h2>
        <form method="POST" action="add_contact.php">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" placeholder="Your message..." rows="4" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
    <script>
    // Get the canvas context
    const ctx = document.getElementById('bookingChart').getContext('2d');

    // Create a new pie chart
    const bookingChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Confirmed', 'Pending'], // Labels for chart segments
            datasets: [{
                data: [<?= $confirmedBookings ?>, <?= $pendingBookings ?>], // PHP values
                backgroundColor: ['#28a745', '#ffc107'], // Green for confirmed, yellow for pending
                borderColor: ['#ffffff', '#ffffff'],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: true,
                    text: 'Booking Status Distribution'
                }
            }
        }
    });
</script>

</body>
</html>
