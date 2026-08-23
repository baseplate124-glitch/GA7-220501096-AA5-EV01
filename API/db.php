<?php
// Conexión a la base de datos
$host = "localhost";
$user = "root"; // Cambia según tu entorno
$password = ""; // Contraseña de MySQL
$database = "usuarios_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>