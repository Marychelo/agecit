<?php

session_start();
$_SESSION['lugar']="Registro Persona";
$nivel=2;
$_SESSION['url']="";
while($nivel>0){
    $_SESSION['url']=$_SESSION['url']."../";
    $nivel--;
}

include_once $_SESSION['url'].'plantilla/superior.php';
?>
<main>   
<div class="container">
<h2>Registro Persona</h2>
    <p>Para agendar una nueva cita presione el boton</p>
    <input id="id" type="hidden" value="<?php echo $_SESSION['idu']?>">
    <label for="nombre">Nombre</label>
    <input id="nombre" type="text">
    <label for="apellidos">apellidos</label>
    <input id="apellidos" type="text">
    <label for="celular">celular</label>
    <input id="celular" type="text">
    <label for="correo">correo</label>
    <input id="correo" type="text">
    <label for="pass">pass</label>
    <input id="pass" type="text">
    <button class="btnmod" id="add">Registrar</button>
</div>
 </main>   

<footer>
diseñada por skynet sistems
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="crud.js"></script>
</body>
</html>