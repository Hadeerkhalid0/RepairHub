<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com"; // Replace with your actual email
    $subject = "New Contact Message from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    echo "<p>Thank you, $name! We will contact you soon.</p>";
} else {
    echo "<p>Something went wrong. Please try again.</p>";
}
?>
