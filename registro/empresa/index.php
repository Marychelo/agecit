<?php

session_start();
$_SESSION['lugar']="Registro Empresa";
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
    <input type="text"  id="idp" value="<?php echo $_SESSION['idu']?>">
    <input type="text"  id="ide" value="<?php echo $_SESSION['ide']?>">
    <h2>Registro Empresa</h2>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono">
        <h3>Direccion</h3>
        <label for="calle">Calle</label>
        <input type="text" name="calle" id="calle">
        <label for="numero">Numero</label>
        <input type="text" name="numero" id="numero">
        <label for="cp">Codigo Postal</label>
        <input type="text" name="cp" id="cp">
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado">
        <label for="municipio">Municipio</label>
        <input type="text" name="municipio" id="municipio">
        <h3>Horario</h3>
        <label for="hinicio">Apertura</label>
        <input type="time" name="hinicio" id="hinicio">
        <label for="hfin">Cierre</label>
        <input type="time" name="hfin" id="hfin">
        <h4>Dias Laborales</h4>
        <!--div class="btn-group-toggle" data-toggle="buttons"-->
            <label class="btn btn-primary">
                <input type="checkbox" id="lunes" name="lunes" class="lunes"> Lunes
            </label>
            <label class="btn btn-primary">
                <input type="checkbox" id="martes" name="martes"> Martes
            </label>
            <label class="btn btn-primary">
                <input type="checkbox" id="miercoles" name="miercoles"> Miercoles
            </label>
            <label class="btn btn-primary">
                <input type="checkbox" id="jueves" name="jueves"> Jueves
            </label>
            <label class="btn btn-primary">
                <input type="checkbox" id="viernes" name="viernes"> Viernes
            </label>
            <label class="btn btn-primary">
                <input type="checkbox" id="sabado" name="sabado"> Sabado
            </label>
            <label class="btn btn-primary">
                <input type="checkbox" id="domingo" name="domingo"> Domingo
            </label>
        <!--/div-->
        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo">
        <span>En caso de no tener se usara el correo personal</span>

    <button class="" id="btnmod">Registrar</button>
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