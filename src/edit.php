<?php
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "crud_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    
    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id=$id";
    $conn->query($sql);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar usuario</title>
</head>
<body>
    <h1>Editar usuario</h1>
    <form method="POST">
        <input type="text" name="nombre" value="<?= $row['nombre'] ?>" required>
        <input type="email" name="email" value="<?= $row['email'] ?>" required>
        <button type="submit">Guardar</button>
    </form>
    <a href="index.php">Volver</a>
</body>
</html>
