$(document).ready(function (){
    console.log("crud.php ");

    
    
    setTimeout('mostrartabla()',200);
})

function closeModal() {
    $('.modal').fadeOut();
}
$(document).on('click','#btnest',function (e){
    e.preventDefault();
    let elemento =$(this)[0].parentElement.parentElement;
    let id = $(elemento).attr('id');
    console.log(    id     );
    $.post('elementouno.php',{id},function (response) {
        console.log(response);
        let objeto = JSON.parse(response);
        let est=objeto[0].estado;
        
        if (est==1)
        est=0;
        else
        est=1;
        console.log("estado="+est);
        $.post("btnest.php",{id,est},function(response){
            console.log(response);
        setTimeout('mostrartabla()',200);
        })

    })
    

});
//mostrar la informacion de la tabla
function mostrartabla(){
    
    $.ajax({
       url: 'tabla.php',
       type: 'GET',
       success: function (response){
           let objeto = JSON.parse(response);
           let cadena = '';
           let conta = 1;
      objeto.forEach(elemento=>{
          if(elemento.estado==1){
            btnest =`<button id="btnest" value="${elemento.id}" class="btn btn-dark">Activo</button>`;
          }else
          btnest =`<button id="btnest" value="${elemento.id}" class="btn btn-warning">Desactivado</button>`;
          if(conta==1){
              cadena += `
          <tr class="impar" id="${elemento.id}">
           <td>${elemento.id}</td>
           <td>${btnest}</td>
           <td>$${elemento.costo}</td>
           <td>${elemento.nombre}</td>
           <td>${elemento.fecha}</td>
           <td>${elemento.fecham}</td>
           <td><button id="btnmod">modificar</button><button id="btndel">eliminar</button></td>
          </tr>              
                    `;
                   conta++;
          }else{
              cadena += `
          <tr class="par" id="${elemento.id}">
           <td>${elemento.id}</td>
           <td>${btnest}</td>
           <td>$${elemento.costo}</td>
           <td>${elemento.nombre}</td>
           <td>${elemento.fecha}</td>
           <td>${elemento.fecham}</td>
           <td><button id="btnmod">modificar</button><button id="btndel">eliminar</button></td>
          </tr>              
                    `;
                   conta--;
          }
      })     
           $('#tbody').html(cadena);
           //console.log(cadena);
           
       }
    })
}
//terminas de mostrar la informacion de la tabla

//modal para NUEVO

$('.btnadd').click(function (e){
    e.preventDefault();
    
//    alert("Nuevo");
    $('#modalNuevo').fadeIn();
    
});
 $('#add').click(function (e){
       e.preventDefault();
       const postDataJS = {
      costo : $('#costo').val(),
      nombre : $('#servicio').val()
    }
    
    $.post('add.php',postDataJS, function (response){
        console.log(response);
    })
     $('#btnadd').trigger('reset');
        closeModal();
        setTimeout('mostrartabla()',200);
   });
//TERMINA DE btnadd NUEVO
    



//INICIA ELIMINAR
$(document).on('click','#btndel',function (e){
    e.preventDefault();
    $('#modalEliminar').fadeIn();
    let elemento =$(this)[0].parentElement.parentElement;
    let id = $(elemento).attr('id');
  
    $('#mensaje').html("Esta seguro de querer elimiar a cita #"+id);
    $('#del').val(id);
    $.post('elementouno.php',{id},function (response) {
        console.log(response);
        let objeto = JSON.parse(response);
        let id=objeto[0].id;
        let nombre=objeto[0].nombre;
        let costo=objeto[0].costo;
        let fecha=objeto[0].fecha;
        let fecham=objeto[0].fecham;
        $('#ide').val(id);
        $('#costoe').val(costo);
        $('#servicioe').val(nombre);
        if (fecha===fecham)
        $('#mensajeeliminar').html("Esta seguro de querer modificar el concepto #"+id+"<br> agregado el "+fecha);
        else
        $('#mensajeeliminar').html("Esta seguro de querer modificar el concepto #"+id+"<br> agregado el "+fecha+" y modificado el "+fecham);
    })
    });
    $('#del').click(function (e) {
        
        e.preventDefault();
        var id = $(this).val();
 
        $.post('del.php',{id}, function (response) {
            console.log(response);
            closeModal();
            setTimeout('mostrartabla()',200);
           });
        
                })
    
//TERMINA ELIMINAR


//INICIA MODIFICAR
$(document).on('click','#btnmod',function (e){
    e.preventDefault();
//    console.log("entraste al modal modificar");
   $('#modalModificar').fadeIn();
    let elemento =$(this)[0].parentElement.parentElement;
    let id = $(elemento).attr('id');
    $('#btnmod').val(id);
 console.log("el valor de #modificauno es "+ $('#btnmod').val());
            $.post('elementouno.php',{id},function (response) {
        console.log(response);
        let objeto = JSON.parse(response);
        let id=objeto[0].id;
        let nombre=objeto[0].nombre;
        let costo=objeto[0].costo;
        let fecha=objeto[0].fecha;
        let fecham=objeto[0].fecham;
        $('#idm').val(id);
        $('#costom').val(costo);
        $('#serviciom').val(nombre);
        if (fecha===fecham)
        $('#mensajemodificar').html("Esta seguro de querer modificar el concepto #"+id+"<br> agregado el "+fecha);
        else
        $('#mensajemodificar').html("Esta seguro de querer modificar el concepto #"+id+"<br> agregado el "+fecha+" y modificado el "+fecham);
    })
    });
    
$('#mod').click( function (e) {
   e.preventDefault(); 
   console.log("clic en #mod es "+ $('#mod').val());
   let id = $('#btnmod').val();
   const postDataJS = {
      id : id,
      costo : $('#costom').val(),
      nombre : $('#serviciom').val()
    }
    $.post('edit.php',postDataJS, function (response) {
        console.log(response);
    })
    setTimeout('mostrartabla()',200);
    closeModal();
        });
//TERMINA MODIFICAR
$(document).on('click','#cerrarmodal', function (e){
    e.preventDefault();
     closeModal();
        });
    

