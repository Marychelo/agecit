<?php
session_start();
$_SESSION['lugar']="contacto";
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
    <h2>Contactame</h2>
    <p>Para contactarme puedes utilizar el siguiente formulario para mandarme alguna duda o sugerencia acerca de como poder ayudarte y ayudarme a mejorar
    el sistema para que su uso sea mas facil y satisfactorio para todos</p>
    <div class="formulario">
         

    </div>
        <button id="enviar">enviar</button>
        <br><br><br><br>
    </form>
    </div>

</main>

<footer>
diseñada por skynet sistems
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo $_SESSION['url']."jquery-3.5.1.min.js";?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="crud.js"></script>
</body>
</html>