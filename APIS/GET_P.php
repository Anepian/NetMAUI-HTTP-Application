<?php
header("Content-type: application/json; charset=utf-8");

// Connect to the database server
$servername = "yourservername";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabasename";

$id = $_GET["Id"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Products WHERE Id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // The user exists, get the user fields
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    // The user does not exist
    echo json_encode(null);
}

$conn->close();
?>