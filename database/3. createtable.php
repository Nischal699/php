<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

//database connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully<br>";
}

// Create database SQL query
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
    echo "Error creating Table " . $conn->error;
}
$conn->close();
?>
