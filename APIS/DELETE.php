<?php
header("Content-type: application/json; charset=utf-8");

// Connect to the database server
$servername = "yourservername";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabasename";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["Id"];

$sql = "DELETE FROM Productos WHERE Id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Product Deleted";
} else {
    echo "Failed to Delete Product";
}

$conn->close();
?>