<?php

session_start();
$_SESSION['lugar']="dashe";
$nivel=1;
$_SESSION['url']="";
while($nivel>0){
    $_SESSION['url']=$_SESSION['url']."../";
    $nivel--;
}

include_once $_SESSION['url'].'plantilla/superior.php';
?>
<main>   
<div class="container">
<h2>Citas</h2>
    <p>Para agendar una nueva cita presione el boton</p>
    <button class="btnadd">Agregar</button>
    <p>Citas <?php echo "del dia " . date("d") . " del " . date("M") . " de " . date("Y"); ?></p>

    <table class="table">
      <thead class="thead">
        <tr>
            <th>Folio</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Servicio</th>
            <th>Estado</th>
            <th>Posponer</th>
            <th>cancelar</th>
        </tr>
        </thead>
        <tbody id="tbody">
            </tbody>
            
	</table>
    <!--inicia el modal de nuevo-->

    <div id="modalNuevo" class="modal" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <h5 class="modal-title" id="my-modal-title">Nueva cita</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    
                </div>
                <div class="modal-body">
                    <label for="usuario">Cliente:</label>
                    <select id="usuario"  required=""></select><br>
                    <label for="servicio">Servicio:</label>
                    <select id="servicio" required=""></select><br>
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" ><br>
                    <label for="hora">Hora:</label>
                    <input type="time" id="hora" ><br>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="add">Añadir</button>
                    <a href="#" class="btn btn-success" id="cerrarmodal" >Cerrar</a>
                </div>
            </div>
        </div>
    </div>
    <!--terminanuevo modal-->
    
<!--inicia modal para modificar-->        
    <div id="modalModificar" class="modal" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <h5 class="modal-title" id="my-modal-title">Modificar Cita</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    
                </div>
                <div class="modal-body">
                <input type="hidden" name="idm" id="idm"><br>
                    <h5 id="mensaje"></h5>
                    <label for="usuariom">Cliente:</label>
                    <select id="usuariom"  required=""></select><br>
                    <label for="serviciom">Servicio:</label>
                    <select id="serviciom" required=""></select><br>
                    <label for="fecham">Fecha:</label>
                    <input type="date" id="fecham" ><br>
                    <label for="hora">Hora:</label>
                    <input type="time" id="horam" ><br>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="mod">Modificar</button>
                    <a href="#" class="btn btn-success" id="cerrarmodal" >Cerrar</a>
                </div>
            </div>
        </div>
    </div>

<!--inicia modal de eliminar-->
    <div id="modalEliminar" class="modal" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <h5 class="modal-title" id="my-modal-title">Eliminar Cita</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    
                </div>
                <div class="modal-body">
            
                <input type="hidden" name="ide" id="ide"><br>
                    <h5 id="mensajeeliminar"></h5>
                    <label for="usuarioe">Cliente:</label>
                    <input id="usuarioe" readonly><br>
                    <label for="servicioe">Servicio:</label>
                    <input id="servicioe" readonly><br>
                    <label for="fechae">Fecha:</label>
                    <input type="date" id="fechae" readonly><br>
                    <label for="horae">Hora:</label>
                    <input type="time" id="horae" readonly><br>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="del">Eliminar</button>
                    <a href="#" class="btn btn-success" id="cerrarmodal" >Cerrar</a>
                </div>
            </div>
        </div>
    </div>
<!--terminan los modal-->
</div>

</main>

<footer>
diseñada por skynet sistems
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="crud.js"></script>
</body>
</html>