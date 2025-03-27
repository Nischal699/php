<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE MyDetails (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
addres VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyDetails created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 

