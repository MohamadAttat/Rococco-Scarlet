<?php
// Database credentials
$host = $_SERVER['HTTP_HOST'];
if ($host === 'localhost' || $host === '127.0.0.1') {
    $servername = "localhost"; // Host
    $username = "root"; // Database username
    $password = ""; // Database password
    $dbname = "scarlet_db"; // Database name
    $port = 80; // Port (optional, default for MySQL)
} else {
    $servername = "localhost"; // Host
    $username = "rococo"; // Database username
    $password = "CKOelhd8^fyq*x28"; // Database password
    $dbname = "rococo_db"; // Database name
    $port = 3306; // Port (optional, default for MySQL)
}

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname, $port);
$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection
if ($conn->connect_error) {
    die("!!!Connection failed: " . $conn->connect_error);
}


?>