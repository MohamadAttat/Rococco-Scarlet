<?php
// Replace with your own secret key
$secretKey = "6Lee7ssqAAAAAG0FGiAXAe45LnvIjc8M8XxBQ-_5";

// The response from reCAPTCHA
$recaptchaResponse = $_POST['g-recaptcha-response'];

// The user's IP address (optional but recommended for additional security)
$remoteIP = $_SERVER['REMOTE_ADDR'];

// Send a POST request to Google's reCAPTCHA API to verify the user's response
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse&remoteip=$remoteIP");

// Decode the JSON response from Google
$responseKeys = json_decode($response, true);

// Check if the reCAPTCHA was successfully validated
if(intval($responseKeys["success"]) !== 1) {
    echo 'reCAPTCHA validation failed. Please try again.';
} else {
    echo 'reCAPTCHA validation successful. Form submitted!';
}
?>
