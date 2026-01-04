<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $phone   = htmlspecialchars($_POST['phone']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@gmail.com"; // 🔴 Change this
    $subject = "New Printing Enquiry";

    $body = "
    Name: $name\n
    Phone: $phone\n
    Email: $email\n
    Message:\n$message
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!');window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Try again.');window.history.back();</script>";
    }
}
?>
