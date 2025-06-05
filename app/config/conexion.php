<?php
// Cargar variables de entorno desde el archivo .env
$variables = parse_ini_file(__DIR__ . '/../../.env'); // Ajusta la ruta según tu estructura

$host = $variables['DB_HOST'];
$user_db = $variables['DB_USER'];
$pass_db = $variables['DB_PASS'];
$db = $variables['DB_NAME'];

$conexion = new mysqli($host, $user_db, $pass_db, $db);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
