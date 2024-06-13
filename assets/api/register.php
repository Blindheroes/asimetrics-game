<?php
// Include database connection file
require_once 'connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO user (`user name`, `user password`, `user mail`) VALUES (?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("sss", $username, $password, $email);

    // Hash password
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
        header("Location: ../../pages/dashboard.html");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();
}
?>