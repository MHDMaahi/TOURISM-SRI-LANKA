<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

include('../php/conn.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "UPDATE book_form SET status = 'confirmed' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: admin_dashboard.php?message=confirmed");
        exit();
    } else {
        echo "Error confirming record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid ID.";
}
?>
