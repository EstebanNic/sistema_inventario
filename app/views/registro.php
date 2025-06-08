<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <h1>Crear una cuenta</h1>

  <form action="" id="registroFormulario">
    <label for="">Nombre</label>
    <input type="text" id="nombreRegistro" name="nombreRegistro"><br><br>

    <label for="">Apellidos</label>
    <input type="text" id="apellidoRegistro" name="apellidoRegistro"><br><br>

    <label for="">Correo</label>
    <input type="email" id="correoRegistro" name="correoRegistro"><br><br>

    <label for="">Contraseña</label>
    <input type="password" id="passwordRegistro" name="passwordRegistro"> <br><br>

    <label for="">Confirmar Contraseña</label>
    <input type="password" id="passwordRegistro2" name="passwordRegistro2"> <br><br>

    <button>Registrarse</button>
  </form>
</body>

</html>

<script>
  const form = document.getElementById("registroFormulario");

  form.addEventListener('submit', function(event) {
    const password = document.getElementById('passwordRegistro').value;
    const confirmarPassword = document.getElementById('passwordRegistro2').value;

    if (password != confirmarPassword){
      event.preventDefault(); //Esto detienen el envio
      alert('Las contraseñas no coiciden. Por favor, verifica');
    }

  });
</script>
