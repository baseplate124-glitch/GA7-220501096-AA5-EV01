<?php
// Inicio de sesión
include("db.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "✅ Autenticación satisfactoria";
    } else {
        echo "❌ Error en la autenticación";
    }
} else {
    echo "❌ Usuario no encontrado";
}

$conn->close();
?>
