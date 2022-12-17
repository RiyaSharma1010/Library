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
$Password= $_POST["Password"];

$sql = "select * from Users where First_Name='".$Fname."' , Password= '".$Password."'";
echo $sql;
$result =  $conn->query($sql);

if ($result->num_rows > 0) {
  echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
?>