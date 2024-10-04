<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $category = htmlspecialchars($_POST['category']);
    $priority = htmlspecialchars($_POST['priority']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "ksolroman@gmail.com";
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nCategory: $category\nPriority: $priority\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Invalid request.";
}
?>
