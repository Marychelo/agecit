var mensaje = "inicia mensaje";
var lunes=0,martes=0,miercoles=0,jueves=0,viernes=0,sabado=0,domingo=0;
var checkbox;
$(document).ready(function (){
    console.log("crud.php ");
//    setTimeout('mostrartabla()',500);
    checkbox = document.getElementById('lunes');
    checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        lunes=1;
    }else
        lunes=0;
        
    });
    checkbox = document.getElementById('martes');
    checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        martes=1;
    }else
        martes=0;
    });
    checkbox = document.getElementById('miercoles');
    checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        miercoles=1;
    }else
        miercoles=0;
    });
    checkbox = document.getElementById('jueves');
    checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        jueves=1;
    }else
        jueves=0;
    });
    checkbox = document.getElementById('viernes');
    checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        viernes=1;
    }else
        viernes=0;
    });
    checkbox = document.getElementById('sabado');
    checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        sabado=1;
    }else
        sabado=0;
    });
    checkbox = document.getElementById('domingo');
    checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        domingo=1;
    }else
        domingo=0;
    });

    
});

$('#btnmod').click( function (e) {
   e.preventDefault(); 
   let ide = $('#ide').val();
   let postDataJS = {
      id : ide,
      nom : $('#nombre').val(),
      tel : $('#telefono').val(),
      cal : $('#calle').val(),
      num : $('#numero').val(),
      cp : $('#cp').val(),
      est : $('#estado').val(),
      mun : $('#municipio').val(),
      hin : $('#hinicio').val(),
      hfi : $('#hfin').val(),
      lu : lunes,
      m : martes,
      mx : miercoles,
      j : jueves,
      v : viernes,
      s : sabado,
      d : domingo,
      ema : $('#correo').val()
    };
        console.log(postDataJS);
    $.post('edit.php',postDataJS, function (response) {
        console.log(response);
    });
    
   let idp = $('#idp').val();
   postDataJS = {
      ide : ide,
      idp : idp
    };
        console.log(postDataJS);
    $.post('add.php',postDataJS, function (response) {
        console.log(response);
    });
    
//    setTimeout('mostrartabla()',500); 
//    closeModal();
                window.location = "/agecit/empresa"; 

        });
