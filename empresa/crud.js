$(document).ready(function (){
    console.log("crud.php ");
    setTimeout('mostrartabla()',500);
    
});

function closeModal() {
    setTimeout('mostrartabla()',500);
   

    $('.modal').fadeOut();
}
//mostrar la informacion de la tabla
function mostrartabla(){
    
    $.ajax({
       url: 'tabla.php',
       type: 'GET',
       success: function (response){
           let objeto = JSON.parse(response);
           let cadena = '';
           let conta = 1;
           let btnrea ='';
           
           objeto.forEach(elemento=>{

               if (elemento.estado==1){
                   btnrea =`Realizada`;
               }
               else{
                   btnrea =`Pendiente`;
                   }

               if(conta===1){
              cadena += `
          <tr class="impar" id="${elemento.folio}">
           <td>${elemento.folio}</td>
           <td>${elemento.hora}</td>
           <td>${elemento.usuario} ${elemento.apellidos}</td>
           <td>${elemento.servicio}</td>
           <td>${btnrea}</td>
           <td><button id="btnmod" class="btn btn-dark">Posponer</button></td>
           <td><button id="btndel" class="btn btn-dark">Eliminar</button></td>
          </tr>              
                    `;
                   conta++;
          }else{
              cadena += `
          <tr class="par" id="${elemento.folio}">
           <td>${elemento.folio}</td>
           <td>${elemento.hora}</td>
           <td>${elemento.usuario} ${elemento.apellidos}</td>
           <td>${elemento.servicio}</td>
           <td>${btnrea}</td>
           <td><button id="btnmod" class="btn btn-dark">Posponer</button></td>
           <td><button id="btndel" class="btn btn-dark">Eliminar</button></td>
          </tr>              
                    `;
                   conta--;
          }
      });
           $('#tbody').html(cadena);
           //console.log(cadena);
           
       }
    });
}
//terminas de mostrar la informacion de la tabla

//modal para NUEVO

$('.btnadd').click(function (e){
    e.preventDefault();
    
//    alert("Nuevo");
    $('#modalNuevo').fadeIn();
    $.get('selectusuario.php',function (response) {
        let objeto = JSON.parse(response);
        let cadena = '';
        
        objeto.forEach(elemento=>{
            cadena += `
            <option value="${elemento.id}">${elemento.nombre} ${elemento.apellidos}</option>
            `;
        });
        $('#usuario').html(cadena);
    });
                                    $.get('selectservicio.php',function (response) {
                                        let objeto = JSON.parse(response);
                                        let cadena = '';
                                           
                                        objeto.forEach(elemento=>{
                                          cadena += `
                                          <option value="${elemento.id}">$${elemento.costo} ${elemento.nombre}</option>
                                          `;
                                      });
                                           $('#servicio').html(cadena);
                                    });
});
 $('#add').click(function (e){
       e.preventDefault();
       const postDataJS = {
      usuario : $('#usuario').val(),
      servicio : $('#servicio').val(),
      fecha : $('#fecha').val(),
      hora : $('#hora').val()
    };
    
    $.post('add.php',postDataJS, function (response){
        console.log(response);
    });
     $('#addcita').trigger('reset');
            closeModal();
    setTimeout('mostrartabla()',500);
   });
//TERMINA DE btnadd NUEVO
    



//INICIA ELIMINAR
$(document).on('click','#btndel',function (e){
    e.preventDefault();
    $('#modalEliminar').fadeIn();
    let elemento =$(this)[0].parentElement.parentElement;
    let id = $(elemento).attr('id');
  
    $('#mensajeeliminar').html("Esta seguro de querer elimiar la cita</br>Folio:"+id);
    $('#del').val(id);
    
    $.post('cita.php',{id},function (response) {
        console.log("Datos de la cita");
        console.log(response);
        let objeto = JSON.parse(response);
        let usuario=objeto[0].usuario;
        let servicio=objeto[0].servicio;
        $('#fechae').val(objeto[0].fecha);
        $('#horae').val(objeto[0].hora);
    //selects
    $.get('selectservicio.php',function (response) {
    let objeto = JSON.parse(response);
       let cadena = '';
       
       objeto.forEach(elemento=>{
      console.log(elemento.id);
      if(elemento.id===servicio)
      cadena = `$${elemento.costo} ${elemento.nombre}`;
   
  });
  console.log("cadena="+cadena);
       $('#servicioe').val(cadena);
});
$.get('selectusuario.php',function (response) {
    let objeto = JSON.parse(response);
    let cadena = '';
       
    objeto.forEach(elemento=>{
      if(elemento.id===usuario)
      cadena = `${elemento.nombre} ${elemento.apellidos}`;

  });
       $('#usuarioe').val(cadena);
});
    //termina selects
});
    });




    
    $('#del').click(function (e) {
        
        e.preventDefault();
        var id = $(this).val();
 
        $.post('del.php',{id}, function (response) {
            console.log(response);
            closeModal();
    setTimeout('mostrartabla()',500);
           });
        
                });
    
//TERMINA ELIMINAR


//INICIA MODIFICAR
$(document).on('click','#btnmod',function (e){
    e.preventDefault();
//    console.log("entraste al modal modificar");
   $('#modalModificar').fadeIn();
    let elemento =$(this)[0].parentElement.parentElement;
    let id = $(elemento).attr('id');
    $('#mod').val(id);
    let mensaje ="Folio:"+id;
    $('#mensaje').html(mensaje);
    console.log("el valor de #modificar es "+ $('#mod').val());
        $.post('cita.php',{id},function (response) {
            console.log("Datos de la cita");
            console.log(response);
            let objeto = JSON.parse(response);
            let usuario=objeto[0].usuario;
            let servicio=objeto[0].servicio;
            $('#fecham').val(objeto[0].fecha);
            $('#horam').val(objeto[0].hora);
        //selects
        $.get('selectservicio.php',function (response) {
        let objeto = JSON.parse(response);
           let cadena = '';
           
           objeto.forEach(elemento=>{
          console.log(elemento.id);
          if(elemento.id===servicio)
          cadena += `
          <option selected value="${elemento.id}">$${elemento.costo} ${elemento.nombre} </option>
          `;
                else
                cadena += `
          <option value="${elemento.id}">$${elemento.costo} ${elemento.nombre} </option>
          `;
      });
      console.log("cadena="+cadena);
           $('#serviciom').html(cadena);
    });
    $.get('selectusuario.php',function (response) {
        let objeto = JSON.parse(response);
        let cadena = '';
           
        objeto.forEach(elemento=>{
          if(elemento.id===usuario)
          cadena += `
          <option selected value="${elemento.id}">${elemento.nombre} ${elemento.apellidos}</option>
          `;
            else
                cadena += `
          <option value="${elemento.id}">${elemento.nombre} ${elemento.apellidos}</option>
          `;
      });
           $('#usuariom').html(cadena);
    });
        //termina selects
    });
    });
    
$('#mod').click( function (e) {
   e.preventDefault(); 
   console.log("clic en #mod es "+ $('#mod').val());
   let id = $('#mod').val();
   const postDataJS = {
      id : id,
      usuario : $('#usuariom').val(),
      servicio : $('#serviciom').val(),
      fecha : $('#fecham').val(),
      hora : $('#horam').val()
    };
    $.post('edit.php',postDataJS, function (response) {
        console.log(response);
    });
    setTimeout('mostrartabla()',500); 
    closeModal();
        });
//TERMINA MODIFICAR
$(document).on('click','#cerrarmodal', function (e){
    e.preventDefault();
     closeModal();
        });
    

