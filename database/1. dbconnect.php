<?php
$servername = "localhost";
$username = "root";
$password = "";

//database connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully";
}
$conn->close();
?>