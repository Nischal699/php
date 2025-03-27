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
$sql = "SELECT id, firstname, lastname,email, addres FROM MyDetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
  echo "<tr><th>ID</th><th>Firstname</th><th>LastName</th><th>Email</th><th>Address</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." </td><td>".$row["lastname"]."</td><td>".$row["email"]." </td><td>".$row["addres"]." </td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?> 

