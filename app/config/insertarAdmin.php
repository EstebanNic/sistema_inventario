<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'conexion.php'; // Ajusta la ruta según tu estructura

$nombre = "Esteban";
$apellido = "Bunce Sambachi";
$correo = "estebanadmin@gmail.com";
$clave_plana = "esteban0235";
$rol = "administrador";

// Generar el hash seguro
$clave_hash = password_hash($clave_plana, PASSWORD_DEFAULT);

// Preparar e insertar
$sql = "INSERT INTO usuarios (nombre,apellido, correo,rol, pass) VALUES (?, ?, ?, ?,?)";
$stmt = $conexion->prepare($sql);

if ($stmt === false) {
    die("Error preparando la consulta: " . $conexion->error);
}

$stmt->bind_param("sssss", $nombre, $apellido, $correo, $rol , $clave_hash);

if ($stmt->execute()) {
    echo "✅ Usuario administrador creado correctamente.";
} else {
    echo "❌ Error al crear el usuario: " . $stmt->error;
}

$stmt->close();
$conexion->close();


// esta es una escritura en otro idioma {}[]~`h`k`k`l asdjkàsdjkhásdśdsd,.\\\\\\\\\\\\\\\\]]]\\||\\\|\|||\\]]]]]]]][[[]]][][]´\´\\
?>
