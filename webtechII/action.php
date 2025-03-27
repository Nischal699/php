<?php
  $fname = $_POST['myfname'];
  $lname = $_POST['mylname'];
  $email = $_POST['myemail'];
  $address = $_POST['add'];
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtechbca";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO MyDetails (firstname, lastname, email, addres)
VALUES ('$fname', '$lname', '$email', '$address')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

