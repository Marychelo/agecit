<?php ?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="plantilla/estilo.css">
    <title>AGECIT</title>
  </head>
  <body>
<header>
<h1>AGECIT-inicio</h1>
</header>
<main>
    <div class="container">
        <h2>Inicio Sesion</h2>
        <label for="usuario">Correo</label>
        <input type="text" name="usuario" id="usuario" >
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass">
        <button id="iniciar">Iniciar</button>
        <span><a href="respass.html">Olvide mi contraseña</a></span>

        <br>
        <div id="alerta"></div>
    <h2>Registrarse</h2>
        <label for="codigo">Codigo</label>
        <input type="text" name="codigo" id="codigo">
        <button id="btncod">Validar</button>
        <div id="alerta2"></div>
    </div>
    
</main>
<footer>
diseñada por skynet sistems
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="login.js"></script>
  </body>
</html>