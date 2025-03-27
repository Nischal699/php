<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtechbca";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyDetails (firstname, lastname, email, addres)
VALUES ('David', 'Smith', 'Davidsmith@example.com', 'Baneshwor')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

