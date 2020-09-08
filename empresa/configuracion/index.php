<?php
session_start();
$_SESSION['lugar'] = "configuracion";
$nivel = 2;
$_SESSION['url'] = "";
while ($nivel > 0) {
    $_SESSION['url'] = $_SESSION['url'] . "../";
    $nivel--;
}

include_once $_SESSION['url'] . 'plantilla/superior.php';
?>
<main>   
    <div class="container">
        <div class="formulario">
            <h2>Registro Persona</h2>
            <div class="form-group">
                <input type="hidden"  id="idu" value="<?php echo $_SESSION['idu'] ?>">
                <input type="hidden"  id="ide" value="<?php echo $_SESSION['ide'] ?>">
                <label for="nombrem">Nombre(s)</label>
                <input id="nombrem" class="form-control" name="nombre" >
            </div>
            <div class="form-group">
                <label for="apellidosm">Apellidos</label>
                <input id="apellidosm" class="form-control" name="apellidos" >
            </div>
            <div class="form-group">
                <label for="celularm">Celular</label>
                <input id="celularm" class="form-control" name="celular" >
            </div>
            <div class="form-group">
                <label for="emailm">Correo</label>
                <input id="emailm" class="form-control" name="emailm" >
                <label for="passm">Contraseña</label>
                <input id="passm" class="form-control" name="passm" >
            </div>
            <button id="btnmod">Editar</button>
        </div>
        <div class="formulario">
            <h2>Registro Empresa</h2>
            <div class="form-group">
                <label for="nombreem">Nombre</label>
                <input id="nombreem" class="form-control" name="nombree" >
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input id="telefono" class="form-control" name="telefono" >
            </div>
            <div class="form-group">
                <h4>Direccion</h4>
                <label for="calle">Calle</label>
                <input type="text" name="calle" id="calle" class="form-control">
                <label for="numero">Numero</label>
                <input type="text" name="numero" id="numero" class="form-control">
                <label for="cp">Codigo Postal</label>
                <input type="text" name="cp" id="cp" class="form-control">
                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control">
                <label for="municipio">Municipio</label>
                <input type="text" name="municipio" id="municipio" class="form-control">
            </div>
            <div class="form-group">
                <h4>Horario</h4>
                <label for="hinicio">Apertura</label>
                <input type="time" name="hinicio" id="hinicio">
                <label for="hfin">Cierre
                    <input type="time" name="hfin" id="hfin">
                    </div>
                    <div class="form-group" id="cheks">
                        <h4>Dias Laborales</h4>
                        <div class="btn-group-toggle" data-toggle="buttons" id="dias">
                        <label for="lunes" id="d1" class="btn btn-secondary">
                        <input type="checkbox" id="lunes" name="lunes"> Lunes
                        </label>
                        <label for="martes" id="d2" class="btn btn-secondary">
                        <input type="checkbox" id="martes" name="martes"> Martes
                        </label>
                        <label for="miercoles" id="d3" class="btn btn-secondary">
                        <input type="checkbox" id="miercoles" name="miercoles"> miercoles
                        </label>
                        <label for="jueves" id="d4" class="btn btn-secondary">
                        <input type="checkbox" id="jueves" name="jueves"> jueves
                        </label>
                        <label for="viernes" id="d5" class="btn btn-secondary">
                        <input type="checkbox" id="viernes" name="viernes"> viernes
                        </label>
                        <label for="sabado" id="d6" class="btn btn-secondary">
                        <input type="checkbox" id="sabado" name="sabado"> sabado
                        </label>
                        <label for="domingo" id="d7" class="btn btn-secondary">
                        <input type="checkbox" id="domingo" name="domingo"> domingo
                        </label>

                        </div>
                    </div>



                    <label for="emailem">Correo</label>
                    <input type="text" name="emailem" id="emailem">
                    <span>En caso de no tener se usara el correo personal</span>


            </div>
            <button id="btnmod2">editar</button>
            <br><br><br><br>
        </div>


</main>

<footer>
    diseñada por skynet sistems
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo $_SESSION['url'] . "jquery-3.5.1.min.js"; ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="crud.js"></script>
</body>
</html>