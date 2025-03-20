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

$sql = "INSERT INTO MyDetails (firstname, lastname, email,addres)
VALUES ('John', 'Doe', 'john@example.com','kathmandu');";
$sql .= "INSERT INTO MyDetails (firstname, lastname, email,addres)
VALUES ('Mary', 'Moe', 'mary@example.com','bhaktapur');";
$sql .= "INSERT INTO MyDetails (firstname, lastname, email,'addres')
VALUES ('Julie', 'Dooley', 'julie@example.com','lalitpur')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>