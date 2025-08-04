<?php
include('php/conn.php'); // adjust path if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $query = "INSERT INTO contact_form (name, email, subject, message) 
              VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contacts.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f7f8;
      padding: 0;
      margin: 0;
    }

    .contact-container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 30px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .contact-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .contact-container label {
      display: block;
      margin: 15px 0 5px;
      color: #555;
    }

    .contact-container input,
    .contact-container textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      resize: none;
    }

    .contact-container button {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    .contact-container button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="contact-container">
    <h2>Contact Us</h2>
    <form action="#" method="POST">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required />

      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" required />

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="6" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>
</body>
</html>
