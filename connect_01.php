<?php
    $talent = $_POST['talent'] ?? '';
    $place = $_POST['place'] ?? '';
    $email = $_POST['email'] ?? '';
    $dates = $_POST['dates'] ?? '';
    $person = $_POST['person'] ?? '';
    $tel = $_POST['tel'] ?? '';
    $description = $_POST['description'] ?? '';

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'photographer_db');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO `business_category` (talent, place, email, dates, person,tel,description) VALUES (?, ?, ?, ?, ?,?,?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssisis", $talent, $place, $email, $dates, $person, $tel, $description);

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

