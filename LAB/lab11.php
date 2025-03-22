
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab10_data";

// Create Connection
$conn = new mysqli($servername, $username, $password);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS lab10_data";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

$conn->select_db($dbname);

// Create Table if not exists
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    phone VARCHAR(10) NOT NULL UNIQUE
)";
$conn->query($sql);

// Insert Data into Database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, address, age, phone) VALUES ('$name', '$address', '$age', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>