<?php
header("Content-type: application/json; charset=utf-8");

// Connect to the database server
$servername = "yourservername";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabasename";

$name = $_GET["Name"];
$password = $_GET["Password"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Users WHERE Name='$name' AND Password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists, get user fields
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    // User does not exist
    echo json_encode(null);
}

$conn->close();
?>