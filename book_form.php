<?php
include "./php/conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $rooms = $_POST['rooms'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, rooms, arrivals, leaving)
                VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$rooms', '$arrivals', '$leaving')";

    if (mysqli_query($conn, $request)) {
        // Optional: Redirect or show a message
        header('Location: book.php?success=1');
        exit();
    } else {
        echo 'Something went wrong: ' . mysqli_error($conn);
    }
}
?>
