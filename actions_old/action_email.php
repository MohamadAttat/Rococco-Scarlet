<?php
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$config = include('../database_includes/config.php');

function sendEmail($config, $toEmail, $subject, $body) {
    $mail = new PHPMailer(true); // Create a new PHPMailer instance

    try {
        // Server settings using config array
        $mail->isSMTP(); // Use SMTP
        $mail->Host = $config['smtp_host']; // SMTP server from config
        $mail->SMTPAuth = true;
        $mail->Username = $config['smtp_username']; // SMTP username from config
        $mail->Password = $config['smtp_password']; // SMTP password from config
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS
        $mail->Port = $config['smtp_port']; // SMTP port from config

        // SSL/TLS options to bypass certificate verification for testing
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Recipients
        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addAddress($toEmail); // Add recipient email

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        
        // Send the email
        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// sendEmail($config, 'ranamokdad27@gmail.com', 'Test Send Email', 'This is the email body for testing.');
