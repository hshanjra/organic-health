<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $email = $subject = $message = "";
$errorMessage = "";
$successMessage = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Form validation
    if (empty($name)) {
        $errorMessage = "Please enter your name.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Please enter a valid email address.";
    } elseif (empty($subject)) {
        $errorMessage = "Please enter a subject.";
    } elseif (empty($message)) {
        $errorMessage = "Please enter your message.";
    } else {
        // If validation passes, send the email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // SMTP server configuration from .env file
            $mail->isSMTP();
            $mail->Host = $_ENV['SMTP_HOST'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['SMTP_USERNAME'];
            $mail->Password = $_ENV['SMTP_PASSWORD'];
            $mail->SMTPSecure =
                $_ENV['SMTP_SECURE'];  // or 'ssl' if required
            $mail->Port = $_ENV['SMTP_PORT'];

            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress($_ENV['EMAIL_TO']); // Add recipient

            // Content
            $mail->isHTML(false);  // Set email format to plain text
            $mail->Subject = $_ENV['EMAIL_SUBJECT'] . ": " . $subject;
            $mail->Body    = "Name: $name\nEmail: $email\nMessage:\n$message\n";

            // Send the email
            if ($mail->send()) {
                $successMessage = "We have received your message. Thank you for contacting us. We will get back to you soon.";
                $name = $email = $subject = $message = "";  // Clear form data
            } else {
                $errorMessage = 'Sorry, there was an error sending your message.';
            }
        } catch (Exception $e) {
            $errorMessage = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
