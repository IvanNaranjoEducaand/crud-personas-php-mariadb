<?php
include 'config.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $sueldo = $_POST['precio'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE empleados SET nombre = ?, precio = ? WHERE id = ?");
    $stmt->execute([$nombre, $sueldo, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM empleados WHERE id = $id");
$personaempleado = $stmt->fetch();

?>

<h2>Editar Empleado</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $personaempleado['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $personaempleado['nombre']; ?>"><br>
    Sueldo: $<input type="text" name="precio" value="<?php echo $personaempleado['sueldo']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
