<?php
    $name = $_POST['name'] ?? '';
    $email = $_POST['mail'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'photographer_db');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO `messages` (name, email, contact, subject, message) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssiss", $name, $email, $contact, $subject, $message);

    if ($stmt->execute()) 
    {
        header("Location: thanks.php");
        exit();
    } else {
        echo "Error during registration: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>
