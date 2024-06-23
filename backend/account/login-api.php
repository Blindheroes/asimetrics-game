<?php

require_once "../../system/config.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    // Sql query
    $query = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['loggedin'] = $username;
        header("Location: ../../index.php?page=index");
        die();
    } else {
        echo "Login failed";
    }

}
?>