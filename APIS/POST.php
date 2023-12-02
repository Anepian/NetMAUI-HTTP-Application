<?php
// Connect to the database server
$servername = "yourservername";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabasename";

$name = $_GET["Name"];
$description = $_GET["Description"];
$quantity = $_GET["Quantity"];
$costPrice = $_GET["CostPrice"];
$sellingPrice = $_GET["SellingPrice"];
$photo = $_GET["Photo"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Products (Name, Description, Quantity, CostPrice, SellingPrice, Photo)
VALUES ('$name', '$description', '$quantity', '$costPrice', '$sellingPrice', '$photo')";

if ($conn->query($sql) === TRUE) {
  echo "Successful Registration";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>