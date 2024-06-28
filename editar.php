<?php include 'connection.php'; ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM empleado WHERE id=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE empleado SET nombre='$nombre', edad=$edad, email='$email', telefono='$telefono' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Empleado actualizado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Empleado</title>
</head>
<body>
    <h2>Editar Empleado</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
        Edad: <input type="number" name="edad" value="<?php echo $row['edad']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        Teléfono: <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"><br>
        <input type="submit" value="Actualizar">
    </form>
    <a href="index.php">Volver al Listado</a>
</body>
</html>
