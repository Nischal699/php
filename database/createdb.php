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
    echo "Connected successfully<br>";
}

// Create database
$sql = "CREATE DATABASE mydb ";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
