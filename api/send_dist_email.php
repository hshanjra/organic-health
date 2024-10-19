<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$name = $email = $subject = $message = $contact_number = $address = "";
$errorMessage = "";
$successMessage = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $contact_number = htmlspecialchars(trim($_POST['contact']));
    $address = htmlspecialchars(trim($_POST['address']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Form validation
    if (empty($name)) {
        $errorMessage = "Please enter your name.";
    } elseif (strlen($name) > 50) {
        $errorMessage = "Name is too long. Please enter a name less than 50 characters.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Please enter a valid email address.";
    } elseif (empty($contact_number) || !is_numeric($contact_number) || strlen($contact_number) != 10) {
        $errorMessage = "Please enter a valid contact number.";
    } elseif (empty($address)) {
        $errorMessage = "Please enter your address.";
    } else if (strlen($address) > 100) {
        $errorMessage = "Address is too long. Please enter a address less than 100 characters.";
    } elseif (empty($subject)) {
        $errorMessage = "Please enter a subject.";
    } elseif (strlen($subject) > 50) {
        $errorMessage = "Subject is too long. Please enter a subject less than 50 characters.";
    } elseif (empty($message)) {
        $errorMessage = "Please enter your message.";
    } else if (strlen($message) > 450) {
        $errorMessage = "Message is too long. Please enter a message less than 450 characters.";
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
            $mail->Subject = " [Distributorship]" . $_ENV['EMAIL_SUBJECT'] . ":" . $subject;
            $mail->Body    = "Name: $name\nContact Number: $contact_number\nAddress: $address\nEmail: $email\nMessage:\n$message\n";

            // Send the email
            if ($mail->send()) {
                $successMessage = "We have received your message. Thank you for contacting us. We will get back to you soon.";
                $name = $email = $subject = $message = $contact_number = $address = "";  // Clear form data
            } else {
                $errorMessage = 'Sorry, there was an error sending your message.';
            }
        } catch (Exception $e) {
            $errorMessage = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
