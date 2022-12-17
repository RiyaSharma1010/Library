<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Fname= $_POST["First_Name"]; 
$Lname= $_POST["Last_Name"];
$Password= $_POST["Password"];
$Roll_No= $_POST["Roll_No"];
$Email= $_POST["Email"];
$sql = "INSERT INTO users (First_name, Last_name, Password, Roll_no, Email)
VALUES ('".$Fname."', '".$Lname."', '".$Password."', '".$Roll_No."', '".$Email."')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
