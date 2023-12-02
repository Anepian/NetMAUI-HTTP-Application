<?php
// Connect to the database server
$servername = "yourservername";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabasename";

$nombre = $_GET["Nombre"];
$direccion = $_GET["Direccion"];
$telefono = $_GET["Telefono"];
$correo = $_GET["Correo"];
$foto = $_GET["Foto"];
$contrasena = $_GET["Contrasena"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Usuarios (Nombre, Direccion, Telefono, Correo, Foto, Contrasena)
VALUES ('$nombre', '$direccion', '$telefono', '$correo', '$foto', '$contrasena')";

if ($conn->query($sql) === TRUE) {
  echo "Successful Registration";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>