<?php
$servername = "localhost";
$username = "root";  // Change if necessary
$password = "";      // Change if necessary
$dbname = "user_data";

// Create Connection
$conn = new mysqli($servername, $username, $password);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS user_data";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select Database
$conn->select_db($dbname);

// Create Table if not exists
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    // Prepare SQL Query
    $sql = "INSERT INTO users (name, address, age, email) VALUES ('$name', '$address', '$age', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close Connection
$conn->close();
?>