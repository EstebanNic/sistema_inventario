<?php
// Detecta si estás trabajando en localhost o en un hosting
$host = $_SERVER['HTTP_HOST'];
$folder = '/sistema_inventario/public'; // Cambia esto si el proyecto está en otra carpeta

// Define BASE_URL para usar en los enlaces
define('BASE_URL', 'http://' . $host . $folder);
