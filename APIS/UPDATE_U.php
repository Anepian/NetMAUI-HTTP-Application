<?php

// Connect to the database server
$servername = "yourservername";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabasename";

$id=$_GET["Id"];
$name=$_GET["Name"];
$address=$_GET["Address"];
$phone=$_GET["Phone"];
$email=$_GET["Email"];
$photo=$_GET["Photo"];
$password=$_GET["Password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE Users SET `Name`='$name',`Address`='$address',`Phone`='$phone',`Email`='$email',`Photo`='$photo',`Password`='$password' WHERE Id = + $id";

if ($conn->query($sql) === TRUE) {
  echo "Update Successful";
} else {
  echo "Data could not be updated, please verify them";
}

$conn->close();

?>