<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $puesto = $_POST['puesto'];
    $sueldo = $_POST['sueldo'];
    $jornada = $_POST['jornada'];

    try {
        $sql = "INSERT INTO empleados (nombre, puesto, sueldo, jornada) VALUES (:nombre, :puesto, :sueldo, :jornada)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre, 'puesto' => $puesto, 'sueldo' => $sueldo, 'jornada' => $jornada]);

        $message = 'Empleado añadido con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir al empleado: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Empleado</title>
</head>
<body>
<h2>Añadir nuevo Empleado</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="puesto">Puesto:</label>
    <textarea name="puesto" id="puesto"></textarea>
    <br>
    <label for="sueldo">Sueldo:</label>
    <input type="text" name="sueldo" id="sueldo" required>
    <br>
    <label for="jornada">Jornada Laboral (Horas):</label>
    <input type="number" name="jornada" id="jornada" required>
    <br>
    <input type="submit" value="Añadir Empleado">
</form>

</body>
</html>
