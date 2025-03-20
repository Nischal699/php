<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";

//database connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully<br>";
}

// Create database SQL query
$sql = "INSERT INTO MyDetails (firstname, lastname, email, addres)
VALUES ('John', 'Doe','nischal123@gmail.com ','Kathmandu')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>