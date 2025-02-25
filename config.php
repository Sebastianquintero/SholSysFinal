<?php
// config.php
$host = "localhost";
$dbname = "login_prueba";
$username = "root"; // Cambia esto si tienes otro usuario de MySQL
$password = ""; // Cambia esto si tienes una contraseña para MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>