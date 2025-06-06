<?php
define('BASE_PATH', __DIR__ . '/../');
// Cargar la configuración
require_once BASE_PATH . 'app/config/config.php';
$vista = $_GET['view'] ?? null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inventario</title>
</head>

<body>
  <?php
  switch ($vista) {
    case 'login':
      include_once BASE_PATH . 'app/views/login.php';
      break;
    case 'registro':
      include_once BASE_PATH . 'app/views/registro.php';
      break;
    case null:
  ?>
      <h1>Este es el Index</h1>
      <p>Dirigete al login presionando <a href="<?= BASE_URL ?>/login">Login</a>
        o registrate <a href="<?= BASE_URL ?>/registro">Registro</a>
      </p>
  <?php
      break;
    default:
      echo "<h1>Error 404: Página no encontrada</h1>";
      break;
  }
  ?>
</body>

</html>
