<?php
session_start();
$_SESSION['lugar']="clientes";
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
<h2>Clientes</h2>
    <p>Para agregar un nuevo cliente presione el boton</p>
    <button class="btnadd">Agregar</button>

    <table class="table">
      <thead class="thead">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Celular</th>
            <th>Fecha de<br>Registro</th>
            <th>Modificar</th>
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
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label for="nombre">Nombre(s)</label>
                        <input id="nombre" class="form-control" name="nombre" >
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input id="apellidos" class="form-control" name="apellidos" >
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input id="celular" class="form-control" name="celular" >
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input id="correo" class="form-control" name="correo" >
                        <label for="pass">Contraseña</label>
                        <input id="pass" class="form-control" name="pass" >
                    </div>
                        
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
                    <h5 id="mensajemodificar"></h5>
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
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
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label for="nombred">Nombre(s)</label>
                        <input id="nombred" class="form-control" name="nombre" >
                    </div>
                    <div class="form-group">
                        <label for="apellidosd">Apellidos</label>
                        <input id="apellidosd" class="form-control" name="apellidos" >
                    </div>
                    <div class="form-group">
                        <label for="celulard">Celular</label>
                        <input id="celulard" class="form-control" name="celular" >
                    </div>
                    <div class="form-group">
                        <label for="correod">Correo</label>
                        <input id="correod" class="form-control" name="correo" >
                        <label for="passd">Contraseña</label>
                        <input id="passd" class="form-control" name="pass" >
                    </div>
                                            

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