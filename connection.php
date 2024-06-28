<?php
$servername = "192.168.137.56";
$username = "vela";
$password = "123456";
$dbname = "crud_vela";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
