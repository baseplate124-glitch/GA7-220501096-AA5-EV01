<?php
$host = "containers-us-west-123.railway.app";
$user = "root";
$password = "TU_CONTRASEÑA";
$database = "railway";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
