<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyDetails (firstname, lastname, email, addres) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email, $addres);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$addres = "kathmandu";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$addres = "bhaktapur";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$addres = "lalitpur";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>