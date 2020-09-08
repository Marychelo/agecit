$(document).ready(function () {
    console.log("crud.php ");
//    mostrartabla();
    $.get('elementouno.php', function (response) {
        console.log(response);
        let objeto = JSON.parse(response);
        $('#idm').val(objeto[0].id);
        $('#nombrem').val(objeto[0].nombre);
        $('#apellidosm').val(objeto[0].apellidos);
        $('#celularm').val(objeto[0].celular);
        $('#emailm').val(objeto[0].email);
        $('#passm').val(objeto[0].pass);

    });
    $.get('elementodos.php', function (response) {
        console.log(response);
        let objeto = JSON.parse(response);
        $('#idem').val(objeto[0].id);
        $('#nombreem').val(objeto[0].nombre);
        $('#telefono').val(objeto[0].telefono);
        $('#calle').val(objeto[0].calle);
        $('#numero').val(objeto[0].numero);
        $('#cp').val(objeto[0].cp);
        $('#estado').val(objeto[0].estado);
        $('#municipio').val(objeto[0].municipio);
        $('#hinicio').val(objeto[0].hini);
        $('#hfin').val(objeto[0].hfin);
        $('#emailem').val(objeto[0].email);
        if (objeto[0].lunes == 1) {
            $("#d1").removeClass("btn-secondary");
            $("#d1").addClass("btn-primary");
            $("#d1").addClass("active");
            $("#lunes").prop('checked', true);
        }else
            $("#lunes").prop('checked', false);
            $("#lunes").val(objeto[0].lunes);
        
        if (objeto[0].martes == 1) {
            $("#d2").removeClass("btn-secondary");
            $("#d2").addClass("btn-primary");
            $("#d2").addClass("active");
            $("#martes").prop('checked', true);
        }else
        $("#martes").prop('checked', false);
        $("#martes").val(objeto[0].martes);
        
        if (objeto[0].miercoles == 1) {
            $("#d3").removeClass("btn-secondary");
            $("#d3").addClass("btn-primary");
            $("#d3").addClass("active");
            $("#miercoles").prop('checked', true);
        }else
        $("#miercoles").prop('checked', false);
        $("#miercoles").val(objeto[0].miercoles);
        
        if (objeto[0].jueves == 1) {
            $("#d4").removeClass("btn-secondary");
            $("#d4").addClass("btn-primary");
            $("#d4").addClass("active");
            $("#jueves").prop('checked', true);
        }else
        $("#jueves").prop('checked', false);
        $("#jueves").val(objeto[0].jueves);
        
        if (objeto[0].viernes == 1) {
            $("#d5").removeClass("btn-secondary");
            $("#d5").addClass("btn-primary");
            $("#d5").addClass("active");
            $("#viernes").prop('checked', true);
        }else
        $("#viernes").prop('checked', false);
        $("#viernes").val(objeto[0].viernes);
        
        if (objeto[0].sabado == 1) {
            $("#d6").removeClass("btn-secondary");
            $("#d6").addClass("btn-primary");
            $("#d6").addClass("active");
            $("#sabado").prop('checked', true);
        }else
        $("#sabado").prop('checked', false);
        $("#sabado").val(objeto[0].sabado);
        
        if (objeto[0].domingo == 1) {
            $("#d7").removeClass("btn-secondary");
            $("#d7").addClass("btn-primary");
            $("#d7").addClass("active");
            $("#domingo").prop('checked', true);
        }else
        $("#domingo").prop('checked', false);
        $("#domingo").val(objeto[0].domingo);
        
        
    });
    


});

$("#dias").change(function () {
//    $('#lunes:checked').each(
//    function() {
//    alert("El checkbox con valor " + $(this).val() + " está seleccionado");
//    
//    }
//        
//    );
    if ($("#lunes").is(':checked')) {
            $("#lunes").val(1);
            $("#d1").removeClass("btn-secondary");
            $("#d1").addClass("btn-primary");
        } else {
            $("#lunes").val(0);
            $("#d1").removeClass("btn-primary");
            $("#d1").addClass("btn-secondary");
        }
        
        if ($("#martes").is(':checked')) {
            $("#martes").val(1);
            $("#d2").removeClass("btn-secondary");
            $("#d2").addClass("btn-primary");
        } else {
            $("#martes").val(0);
            $("#d2").removeClass("btn-primary");
            $("#d2").addClass("btn-secondary");
        }
        
        if ($("#miercoles").is(':checked')) {
            $("#miercoles").val(1);
            $("#d3").removeClass("btn-secondary");
            $("#d3").addClass("btn-primary");
        } else {
            $("#miercoles").val(0);
            $("#d3").removeClass("btn-primary");
            $("#d3").addClass("btn-secondary");
        }
        
        if ($("#jueves").is(':checked')) {
            $("#jueves").val(1);
            $("#d4").removeClass("btn-secondary");
            $("#d4").addClass("btn-primary");
        } else {
            $("#jueves").val(0);
            $("#d4").removeClass("btn-primary");
            $("#d4").addClass("btn-secondary");
        }
        
        if ($("#viernes").is(':checked')) {
            $("#viernes").val(1);
            $("#d5").removeClass("btn-secondary");
            $("#d5").addClass("btn-primary");
        } else {
            $("#viernes").val(0);
            $("#d5").removeClass("btn-primary");
            $("#d5").addClass("btn-secondary");
        }
        
        if ($("#sabado").is(':checked')) {
            $("#sabado").val(1);
            $("#d6").removeClass("btn-secondary");
            $("#d6").addClass("btn-primary");
        } else {
            $("#sabado").val(0);
            $("#d6").removeClass("btn-primary");
            $("#d6").addClass("btn-secondary");
        }
        
        if ($("#domingo").is(':checked')) {
            $("#domingo").val(1);
            $("#d7").removeClass("btn-secondary");
            $("#d7").addClass("btn-primary");
        } else {
            $("#domingo").val(0);
            $("#d7").removeClass("btn-primary");
            $("#d7").addClass("btn-secondary");
        }

    });



//function closeModal() {
////        mostrartabla();    
//
//    $('.modal').fadeOut();
//}
////mostrar la informacion de la tabla
//function mostrartabla(){
//    
//    $.ajax({
//       url: 'tabla.php',
//       type: 'GET',
//       success: function (response){
//           let objeto = JSON.parse(response);
//           let cadena = '';
//           let conta = 1;
//      objeto.forEach(element=>{
//          if(conta==1){
//              cadena += `
//          <tr class="impar" id="${element.id}">
//           <td>${element.id}</td>
//           <td>${element.nombre} ${element.apellidos}</td>
//           <td>${element.celular}</td>
//           <td>${element.fecha}</td>
//           <td>${element.fecham}</td>
//           <td><button class="small" id="btnmod">modificar</button><br><button class="small" id="eliminar">eliminar</button></td>
//          </tr>   
//                    `;
//                   conta++;
//          }else{
//              cadena += `
//          <tr class="par" id="${element.id}">
//           <td>${element.id}</td>
//           <td>${element.nombre} ${element.apellidos}</td>
//           <td>${element.celular}</td>
//           <td>${element.fecha}</td>
//           <td>${element.fecham}</td>
//           <td><button class="small" id="btnmod">modificar</button><br><button class="small" id="eliminar">eliminar</button></td>
//          </tr>    
//                    `;
//                   conta--;
//          }
//      })     
//           $('#tbody').html(cadena);
//           //console.log(cadena);
//           
//       }
//    })
//}
//terminas de mostrar la informacion de la tabla

//modal para NUEVO

//$('.btnadd').click(function (e){
//    e.preventDefault();
//    
////    alert("Nuevo");
//    $('#modalNuevo').fadeIn();
//
//});
// $('#add').click(function (e){
//       e.preventDefault();
//       console.log($('#smedico'));
//       const postDataJS = {
//      nombre : $('#nombre').val(),
//      apellidos: $('#apellidos').val(),
//      celular : $('#celular').val(),
//      correo : $('#correo').val(),
//      pass : $('#pass').val()
//    }
//    
//    $.post('add.php',postDataJS, function (response){
//        console.log(response);
//    })
//     $('#addcita').trigger('reset');
//            closeModal();
//            mostrartabla();
//   });
//TERMINA DE btnadd NUEVO
//    
////INICIA MODIFICAR PERSONA
//$(document).on('click','#btnmod',function (e){
//    e.preventDefault();
////    console.log("entraste al modal modificar");
//   $('#modalModificar').fadeIn();
//    let elemento =$(this)[0].parentElement.parentElement;
//    let id = $(elemento).attr('id');
//    $('#mod').val(id);
//console.log("el valor de #mod es "+ $('#mod').val());
//        $.post('elementouno.php',{id},function (response) {
//        console.log(response);
//        let objeto = JSON.parse(response);
//        $('#idm').val(objeto[0].id);
//        $('#nombrem').val(objeto[0].nombre);
//        $('#apellidosm').val(objeto[0].apellidos);
//        $('#celularm').val(objeto[0].celular);
//        $('#correom').val(objeto[0].correo);
//        $('#passm').val(objeto[0].pass);
//        if (objeto[0].fecha===objeto[0].fecham)
//        $('#mensajemodificar').html("Esta seguro de querer modificar al cliente #"+id+"<br> agregado el "+objeto[0].fecha);
//        else
//        $('#mensajemodificar').html("Esta seguro de querer modificar al cliente #"+id+"<br> agregado el "+objeto[0].fecha+" y modificado el "+objeto[0].fecham);
//        
//    })
//    });

$('#btnmod').click(function (e) {
    e.preventDefault();
    console.log("clic en #btnmod es " + $('#idu').val());
    let id = $('#idu').val();
    const postDataJS = {
        id: id,
        nombre: $('#nombrem').val(),
        apellidos: $('#apellidosm').val(),
        celular: $('#celularm').val(),
        email: $('#emailm').val(),
        pass: $('#passm').val()
    }
    $.post('edit.php', postDataJS, function (response) {
        console.log(response);
        alert("Se han modificado los datos personales satisfactoriamente");
    })
//    mostrartabla();    
//    closeModal();
});
//TERMINA MODIFICAR
////INICIA MODIFICAR EMPRESA
//$(document).on('click','#btnmod2',function (e){
//    e.preventDefault();
////    console.log("entraste al modal modificar");
//   $('#modalModificar2').fadeIn();
//    let elemento =$(this)[0].parentElement.parentElement;
//    let id = $(elemento).attr('id');
//    $('#mod2').val(id);
//console.log("el valor de #mod2 es "+ $('#mod2').val());
//            $.post('elementodos.php',{id},function (response) {
//        console.log(response);
//        let objeto = JSON.parse(response);
//        $('#idm').val(objeto[0].id);
//        $('#nombrem').val(objeto[0].nombre);
//        $('#apellidosm').val(objeto[0].apellidos);
//        $('#celularm').val(objeto[0].celular);
//        $('#correom').val(objeto[0].correo);
//        $('#passm').val(objeto[0].pass);
//        if (objeto[0].fecha===objeto[0].fecham)
//        $('#mensajemodificar').html("Esta seguro de querer modificar al cliente #"+id+"<br> agregado el "+objeto[0].fecha);
//        else
//        $('#mensajemodificar').html("Esta seguro de querer modificar al cliente #"+id+"<br> agregado el "+objeto[0].fecha+" y modificado el "+objeto[0].fecham);
//        
//    })
//    });
//    
//$('#btnmod').click( function (e) {
//   e.preventDefault(); 
//   console.log("clic en #btnmod es "+ $('#idu').val());
//   let idu = $('#idu').val();
//   const postDataJS = {
//        id : idu,
//        nombre: $('#nombrem').val(),
//        apellidos: $('#apellidosm').val(),
//        celular: $('#celularm').val(),
//        correo: $('#correom').val(),
//        pass: $('#passm').val()
//    }
//    $.post('edit.php',postDataJS, function (response) {
//        console.log(response);
//    })
//    mostrartabla();    
//    closeModal();
//        });
////TERMINA MODIFICAR EMPRESA
//$(document).on('click','#cerrarmodal', function (e){
//    e.preventDefault();
//     closeModal();
//        });


$('#btnmod2').click(function (e) {
    e.preventDefault();
    let ide = $('#ide').val();
    let postDataJS = {
        id: ide,
        nom: $('#nombreem').val(),
        tel: $('#telefono').val(),
        cal: $('#calle').val(),
        num: $('#numero').val(),
        cp: $('#cp').val(),
        est: $('#estado').val(),
        mun: $('#municipio').val(),
        hin: $('#hinicio').val(),
        hfi: $('#hfin').val(),
        lu: $('#lunes').val(),
        m: $('#martes').val(),
        mx: $('#miercoles').val(),
        j: $('#jueves').val(),
        v: $('#viernes').val(),
        s: $('#sabado').val(),
        d: $('#domingo').val(),
        ema: $('#emailem').val()
    };
    console.log(postDataJS);
    $.post('edite.php', postDataJS, function (response) {
        console.log(response);
        alert("Datos Empresa Modificados");
    });

//   let idp = $('#idp').val();
//   postDataJS = {
//      ide : ide,
//      idp : idp
//    };
//        console.log(postDataJS);
//    $.post('add.php',postDataJS, function (response) {
//        console.log(response);
//    });

//    setTimeout('mostrartabla()',500); 
//    closeModal();
//                window.location = "/agecit/empresa"; 

});