<?php
$y_name = $_POST['y_name'] ?? '';
$email = $_POST['email'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$wApp = $_POST['wApp'] ?? '';
$location = $_POST['location'] ?? '';
$shoot = $_POST['shoot'] ?? '';
$date = $_POST['date'] ?? '';
$alternative = $_POST['alternative'] ?? '';

// Database connection
$conn = new mysqli('localhost', 'root', '', 'photographer_db');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO personal_category (y_name, email, mobile, wApp, location, shoot, date, alternative) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ssiissis", $y_name, $email, $mobile, $wApp, $location, $shoot, $date, $alternative);

if ($stmt->execute()) {
    $stmt->close();
    $conn->close();
    header("Location: thanks.php");
    exit();
} else {
    echo "Error during registration: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>