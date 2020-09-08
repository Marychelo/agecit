$(document).ready(function (){
    console.log("crud.php ");
    mostrartabla();
    
})

function closeModal() {
        mostrartabla();    

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
      objeto.forEach(element=>{
          if(conta==1){
              cadena += `
          <tr class="impar" id="${element.id}">
           <td>${element.id}</td>
           <td>${element.nombre} ${element.apellidos}</td>
           <td>${element.celular}</td>
           <td>${element.fecha}</td>
           <td><button class="small" id="btnmod">modificar</button><br><button class="small" id="eliminar">eliminar</button></td>
          </tr>   
                    `;
                   conta++;
          }else{
              cadena += `
          <tr class="par" id="${element.id}">
           <td>${element.id}</td>
           <td>${element.nombre} ${element.apellidos}</td>
           <td>${element.celular}</td>
           <td>${element.fecha}</td>
           <td><button class="small" id="btnmod">modificar</button><br><button class="small" id="eliminar">eliminar</button></td>
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
       console.log($('#smedico'));
       const postDataJS = {
      nombre : $('#nombre').val(),
      apellidos: $('#apellidos').val(),
      celular : $('#celular').val(),
      correo : $('#correo').val(),
      pass : $('#pass').val()
    }
    
    $.post('add.php',postDataJS, function (response){
        console.log(response);
    })
     $('#addcita').trigger('reset');
            closeModal();
            mostrartabla();
   });
//TERMINA DE btnadd NUEVO
    
//INICIA MODIFICAR
$(document).on('click','#btnmod',function (e){
    e.preventDefault();
//    console.log("entraste al modal modificar");
   $('#modalModificar').fadeIn();
    let elemento =$(this)[0].parentElement.parentElement;
    let id = $(elemento).attr('id');
    $('#mod').val(id);
console.log("el valor de #mod es "+ $('#mod').val());
            $.post('elementouno.php',{id},function (response) {
        console.log(response);
        let objeto = JSON.parse(response);
        $('#idm').val(objeto[0].id);
        $('#nombrem').val(objeto[0].nombre);
        $('#apellidosm').val(objeto[0].apellidos);
        $('#celularm').val(objeto[0].celular);
        $('#emailm').val(objeto[0].email);
        $('#passm').val(objeto[0].pass);
        if (objeto[0].fecha===objeto[0].fecham)
        $('#mensajemodificar').html("Esta seguro de querer modificar al cliente #"+id+"<br> agregado el "+objeto[0].fecha);
        else
        $('#mensajemodificar').html("Esta seguro de querer modificar al cliente #"+id+"<br> agregado el "+objeto[0].fecha+" y modificado el "+objeto[0].fecham);
        
    })
    });
    
$('#mod').click( function (e) {
   e.preventDefault(); 
   console.log("clic en #mod es "+ $('#mod').val());
   let id = $('#mod').val();
   const postDataJS = {
        id : id,
        nombre: $('#nombrem').val(),
        apellidos: $('#apellidosm').val(),
        celular: $('#celularm').val(),
        correo: $('#correom').val(),
        pass: $('#passm').val()
    }
    $.post('edit.php',postDataJS, function (response) {
        console.log(response);
    })
    mostrartabla();    
    closeModal();
        });
//TERMINA MODIFICAR
$(document).on('click','#cerrarmodal', function (e){
    e.preventDefault();
     closeModal();
        });
    

