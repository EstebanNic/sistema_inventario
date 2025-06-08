<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
</head>

<body>
<h1>Ingresa al sistema</h1>
<form action="">

<label for="">Ingresa nombre de usuario o correo</label>
<input type="text" name="usuarioLogin" id="usuarioLogin">
<br>
<br>
<label for="">Ingresa la contraseña</label>
<input type="password" name="passLogin" id="passLogin">
<br>
<br>
<label for="">No tengo una cuenta</label>
<br>
<br>
<a href="<?= BASE_URL ?>/registro">Registrarse</a>
</form>
</body>

</html>
