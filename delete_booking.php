<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

include('../php/conn.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "DELETE FROM book_form WHERE id = $book_form";

    if (mysqli_query($conn, $query)) {
        header("Location: admin_dashboard.php?message=deleted");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid ID.";
}
?>
