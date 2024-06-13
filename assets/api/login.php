<?php
// Include database connection file
require_once 'connect.php';


$query = "SELECT * FROM user WHERE `user email` = '$email' AND `user password` = '$password'";

$result= mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "Login successful";
    header("Location: ../../pages/dashboard.html");
} else {
    echo "Login failed";
}

?>