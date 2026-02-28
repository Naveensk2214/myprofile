<?php
require 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
   
    $name = trim($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = trim($_POST['phone']);
    $camera = isset($_POST['camera']) ? trim($_POST['camera']) : null;

    if (!$name || !$email || !$phone || !$camera) {
        echo "<script>alert('Invalid input! Please fill all fields correctly.')</script>";

        exit;
    }

    try {
       
        $sql = "INSERT INTO orders (name, email, phone, camera) VALUES (:name, :email, :phone, :camera)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':camera', $camera);

        if ($stmt->execute()) {
            echo "<script>alert('Order submitted successfully!')</script>";
        } else {
            echo "<script>alert('Error submitting order.')</script>";
        }
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
            echo "<script>alert('Something went wrong. Please try again.')</script>";
    }
}
?>
