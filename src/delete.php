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
$stmt = $conn->prepare("DELETE FROM usuarios WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: index.php");
?>
