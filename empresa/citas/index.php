<?php

session_start();
$_SESSION['lugar']="dashe";
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
<h2>Citas</h2>
    <p>Para agendar una nueva cita presione el boton</p>
    <button class="btnadd">Agregar</button>
    <p>Citas <?php echo "del dia " . date("d") . " del " . date("M") . " de " . date("Y"); ?></p>

    <table class="table">
      <thead class="thead">
        <tr>
            <th>#Cita</th>
            <th>Botones</th>
            <th>Cliente</th>
            <th>Servicio</th>
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
                    <label for="smedico">servicio:</label>
                    <select id="smedico"  required=""></select><br>
                    <label for="smedico">Paciente:</label>
                    <select id="spaciente"  required=""></select><br>
                    <input type="hidden" name="id" id="id"><br>
                    <input type="hidden" name="action" value="modif"><br>
                        
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
            
                    <select id="smedicom"  required=""></select><br>
                    <select id="spacientem"  required=""></select><br>
                    <input type="hidden" name="id" id="id"><br>

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
            
                    <form action="" id="formelimiarcita" onsubmit="event.preventDefault();">
                        <h3 id="mensaje"></h3>
                        <input type="hidden" name="id" id="id"><br>
                    </form>

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
    <script src="../../jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="crud.js"></script>
</body>
</html>