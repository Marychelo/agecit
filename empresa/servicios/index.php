<?php

session_start();
$_SESSION['lugar']="servicios";
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
<h2>Servicios</h2>
    <p>Para agregar un nuevo servicio presione el boton</p>
    <button class="btnadd">Agregar</button>
    <p>Como se puede obserbar se tiene un boton de "activo", al agregar un nuevo servicio siempre
    se mostrara como activo, lo cual se refiere que tanto usted como los clientes podran elegir este
    servicio, si no se desea eliminar el servicio por que se seguira brindando pero por el momento
    no se puede, entonces, puede precionar el boton y no aparecera visible al momento de crear una nueva cita.</p>
    <h2>servicios</h2>
    <table class="table">
      <thead class="thead">
        <tr>
            <th>#</th>
            <th>estado</th>
            <th>costo</th>
            <th>Servicio</th>
            <th>fecha</th>
            <th>fecha mod</th>
            <th>Modificar/Eliminar</th>
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
                    
                    <h5 class="modal-title" id="my-modal-title">Nuevo servicio</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    
                </div>
                <div class="modal-body">
                    <label for="costo">Costo:</label>
                    <input id="costo"  required=""><br>
                    <label for="servicio">Servicio:</label>
                    <input id="servicio"  required=""><br>
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
                    
                    <h5 class="modal-title" id="my-modal-title">Modificar servicio</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    
                </div>
                <div class="modal-body">
                    <h5 id="mensajemodificar"></h5>
                    <label for="costom">Costo:</label>
                    <input id="costom"  required=""></input><br>
                    <label for="serviciom">Servicio:</label>
                    <input id="serviciom"  required=""></input><br>
                    <input type="hidden" name="idm" id="idm"><br>


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
                    
                    <h5 class="modal-title" id="my-modal-title">Eliminar servicio</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    
                </div>
                <div class="modal-body">
            
                    <form action="" id="formelimiarcita" onsubmit="event.preventDefault();">
                        <h3 id="mensaje"></h3>
                        <label for="costoe">Costo:</label>
                        <input id="costoe" readonly></input><br>
                        <label for="servicioe">Servicio:</label>
                        <input id="servicioe" readonly></input><br>
                        <input type="hidden" name="ide" id="ide"><br>
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
    <script src="<?php echo $_SESSION['url']."jquery-3.5.1.min.js";?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="crud.js"></script>
</body>
</html>