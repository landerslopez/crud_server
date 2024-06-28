<?php
$servername = "192.168.137.90";
$username = "davila";
$password = "123456";
$dbname = "crud_richard";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
