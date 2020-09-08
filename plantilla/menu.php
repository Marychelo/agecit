
<nav class="menu">
    <h2><br>Menu</h2>

    <a href="/agecit/empresa">inicio</a>
    <a href="/agecit/empresa/servicios">servicios</a>
    <a href="/agecit/empresa/clientes">clientes</a>
    <!--a href="/agecit/empresa/citas">citas</a-->
    <a href="/agecit/empresa/configuracion">configuracion</a>
    <a href="/agecit/empresa/contacto">contactanos</a>
    <p>id empresa:<?php echo $_SESSION['ide'];?></p>
    <p>id usuario:<?php echo $_SESSION['idu'];?></p>
    <p>nombre persona:<?php echo $_SESSION['nombreu'];?></p>
    <p>apellido:<?php echo $_SESSION['apellidou'];?></p>
    <p>tipo de usuario:<?php echo $_SESSION['tipou'];?></p>
    <p>URL:<?php echo $_SESSION['url'];?></p>
    <p>lugar:<?php echo $_SESSION['lugar'];?></p>
    <p>#clientes</p>
    <p>#trabajadores<span>|prox|</span></p>
    <a href="/agecit/empresa/salir">cerrar sesion</a>
    <!--pie de pagina menu-->
</nav>