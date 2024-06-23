
<?php
session_start();
//database connection
$dbserver 			= "localhost";
$dbusername 		= "root";
$dbpassword 		= "";
$db 				= "asimetrics";
//create connection
$conn = new mysqli($dbserver, $dbusername, $dbpassword,$db);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully <br>";

    $query = "SELECT * FROM `configuration` ";
    $result = mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    
    // general settings
    $title 				= $row['name'];
    $seperator 			= $row['separator'];
    $description 		= $row['description'];
    
    $maintenance 		= $row['maintenance'];
}   



?>