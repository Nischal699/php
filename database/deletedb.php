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

// Delete database
$sql = "DELETE DATABASE webTech ";
if ($conn->query($sql) === TRUE) {
    echo "Database deleted successfully";
} else {
    echo "Error deleting database: " . $conn->error;
}
$conn->close();
?>
