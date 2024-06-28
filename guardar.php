<?php include 'connection.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO empleado (nombre, edad, email, telefono) VALUES ('$nombre', $edad, '$email', '$telefono')";
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo empleado creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Crear Empleado</title>
</head>
<body>
    <h2>Crear Empleado</h2>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre" required><br>
        Edad: <input type="number" name="edad" required><br>
        Email: <input type="email" name="email" required><br>
        Teléfono: <input type="text" name="telefono"><br>
        <input type="submit" value="Crear">
    </form>
    <a href="index.php">Volver al Listado</a>
</body>
</html>
