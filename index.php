<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM empleados');
$empleados = $stmt->fetchAll();
?>

<h2>Listado de Empleados</h2>

<!-- Botón para crear un nuevo empleado -->
<a href="create.php">Crear nuevo Empleado</a>
<br><br>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Sueldo (€)</th>
        <th>Jornada (Horas)</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($empleados as $personaempleado): ?>
        <tr>
            <td><?php echo $personaempleado['nombre']; ?></td>
            <td><?php echo $personaempleado['puesto']; ?></td>
            <td><?php echo $personaempleado['sueldo']; ?></td>
            <td><?php echo $personaempleado['jornada']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $personaempleado['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $personaempleado['id']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
