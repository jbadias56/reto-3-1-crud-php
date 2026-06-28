<?php
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "crud_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// READ
$result = $conn->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
</head>
<body>
<h1>CRUD de Usuarios - Versión Final</h1>

<-- CREATE -->
    <h2>Añadir usuario</h2>
    <form method="POST" action="create.php">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Añadir</button>
    </form>

    <!-- READ -->
    <h2>Lista de usuarios</h2>
    <table border="1" style="border-collapse: collapse; width: 100%;">
        <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Acciones</th></tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Editar</a>
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
