<?php
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "crud_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    $conn->query($sql);
    header("Location: index.php");
}
?>
