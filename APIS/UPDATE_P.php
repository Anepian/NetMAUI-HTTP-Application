<?php
// Connect to the database server
$servername = "yourservername";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabasename";

$id = $_GET["Id"];
$nombre = $_GET["Nombre"];
$descripcion = $_GET["Descripcion"];
$cantidad = $_GET["Cantidad"];
$preciocosto = $_GET["PrecioCosto"];
$precioventa = $_GET["PrecioVenta"];
$foto = $_GET["Foto"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE Productos SET `Nombre`='$nombre', `Descripcion`='$descripcion', `Cantidad`='$cantidad', `PrecioCosto`='$preciocosto', `Foto`='$foto', `PrecioVenta`='$precioventa' WHERE Id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Update Successful";
} else {
  echo "Data could not be updated, please verify them";
}

$conn->close();
?>