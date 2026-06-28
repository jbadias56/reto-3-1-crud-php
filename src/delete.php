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
$conn->query("DELETE FROM usuarios WHERE id=$id");
header("Location: index.php");
?>
