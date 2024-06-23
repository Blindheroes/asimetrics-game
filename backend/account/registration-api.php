<?php

require_once "../../system/config.php";
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (`username`, `password`, `email`) VALUES (?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("sss", $username, $password, $email);

    // Hash password
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['loggedin'] = $username;
        header("Location: ../../index.php?page=index");
        die();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();
}
?>