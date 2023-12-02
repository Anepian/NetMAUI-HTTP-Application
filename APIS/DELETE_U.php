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
$sql = "DELETE FROM Users WHERE Id = $id";

if ($conn->query($sql) === TRUE) {
    echo "User Deleted";
} else {
    echo "Failed to Delete User";
}

$conn->close();
?>