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

$sql = "SELECT * FROM Products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $records=array();
    $i=0;
    while($row = $result->fetch_assoc()) {
        // echo "name: " . $row["name"]. " - user: " . $row["user"]. " and password= " . $row["password"]. "<br>";
        $records[$i]=$row;
        $i++;
    }

    echo json_encode($records);
} else {
    echo "[]";
}

$conn->close();
?>