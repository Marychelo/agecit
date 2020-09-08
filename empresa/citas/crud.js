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
           let citas = JSON.parse(response);
           let cadena = '';
           let conta = 1;
      citas.forEach(cita=>{
          if(conta===1){
              cadena += `
          <tr class="impar" id="${cita.id}">
           <td>${cita.id}</td>
           <td><button id="btnrea">R</button><button id="btnmod">M</button></td>
           <td>${cita.pac}</td>
           <td>${cita.med}</td>
           <td><button id="btndel">eliminar</button></td>
          </tr>              
                    `;
                   conta++;
          }else{
              cadena += `
          <tr class="par" id="${cita.id}">
           <td>${cita.id}</td>
           <td><button id="btnrea">R</button><button id="btnmod">M</button></td>
           <td>${cita.pac}</td>
           <td>${cita.med}</td>
           <td><button id="btndel">eliminar</button></td>
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
    $.get('selecm.php',function (response) {
        let medicos = JSON.parse(response);
           let cadena = '';
           
      medicos.forEach(medico=>{
          cadena += `
          <option value="${medico.id}">$${medico.costo} ${medico.nombrem}</option>
          `;
      });
           $('#smedico').html(cadena);
    });
    $.get('selecp.php',function (response) {
        let pacientes = JSON.parse(response);
           let cadena = '';
           
      pacientes.forEach(paciente=>{
          cadena += `
          <option value="${paciente.id}">${paciente.nombrep}</option>
          `;
      });
           $('#spaciente').html(cadena);
    });
});
 $('#add').click(function (e){
       e.preventDefault();
       console.log($('#smedico'));
       const postDataJS = {
      med : $('#smedico').val(),
      pac : $('#spaciente').val()
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
  
    $('#mensaje').html("Esta seguro de querer elimiar a cita #"+id);
    $('#del').val(id);
    
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
    console.log("el valor de #modificarcita es "+ $('#mod').val());
            $.post('selemm.php',{id},function (response) {
        console.log(response);
        var cc = JSON.parse(response);
        console.log("medico "+cc[0].ids);
        var me=cc[0].ids;
        var pa=cc[0].idp;
        console.log("paciente "+cc[0].idp);
        //selects
        $.get('selecm.php',function (response) {
        let medicos = JSON.parse(response);
           let cadena = '';
           
      medicos.forEach(medico=>{
          console.log(medico.id);
          if(medico.id===me)
          cadena += `
          <option selected value="${medico.id}">$${medico.costo} ${medico.nombrem}</option>
          `;
                else
                cadena += `
          <option value="${medico.id}">$${medico.costo} ${medico.nombrem}</option>
          `;
      });
      console.log("cadena="+cadena);
           $('#smedicom').html(cadena);
    });
    $.get('selecp.php',function (response) {
        let pacientes = JSON.parse(response);
           let cadena = '';
           
      pacientes.forEach(paciente=>{
          if(paciente.id===pa)
          cadena += `
          <option selected value="${paciente.id}">${paciente.nombrep}</option>
          `;
            else
                cadena += `
          <option value="${paciente.id}">${paciente.nombrep}</option>
          `;
      });
           $('#spacientem').html(cadena);
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
      med : $('#smedicom').val(),
      pac : $('#spacientem').val()
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
    

