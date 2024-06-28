<?php include 'connection.php'; ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM empleado WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Empleado eliminado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Empleado</title>
</head>
<body>
    <a href="index.php">Volver al Listado</a>
</body>
</html>
