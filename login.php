<?php
require 'config.php'; // Conexión a la base de datos
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $sql = "SELECT * FROM usuario_prueba WHERE usuario = :usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['usuario' => $usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($clave, $user['clave'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: welcome_student.html"); // Redirigir tras login exitoso
        exit;
    } else {
        echo "<script>alert('Usuario o clave incorrectos'); window.location.href='iniciar_sesion.html';</script>";
    }
}
?>
