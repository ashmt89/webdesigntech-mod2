<?php
$servername = "sql301.infinityfree.com";
$username = "if0_35788056";
$password = "R0scoestinks";
$dbname = "if0_35788056_module10";

// Create connection
$conn = new mysqli($sql301.infinityfree.com, $if0_35788056, $R0scoestinks, $if0_35788056_module10);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Students (FirstName, LastName, Email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>