var mensaje = "inicia mensaje";
var mencod = "inicia 2 mensaje 2";
var objeto ;


$(document).ready(function (){
    console.log("inicio en login js");
    
});

$('#iniciar').click(function (e){
        e.preventDefault();
        console.log("clic en iniciar");
        if($('#usuario').val()==="" | $('#pass').val()===""){
            mensaje="Ingrese usuario y contraseña";
        }
        else{
            let postDataJS = {
            usu: $('#usuario').val(),
            pas: $('#pass').val()
        };
            console.log("postDataJS");
            console.log(postDataJS);

            $.ajax({
            url: 'vda.php',
            type: 'POST',
            data: postDataJS,
            success: function (response) {
//                console.log("response");
//                console.log(response);
//                console.log("");
                
//                console.log("objeto = JSON.parse(response);");
//                console.log(objeto = JSON.parse(response));
                objeto = JSON.parse(response);
//                                console.log("");

//                console.log("objeto[0]");
//                console.log(objeto[0]);
//                                console.log("");

                if (objeto.length === 0) {
                    mensaje = "credenciales incorrectas";
                } else {
                    mensaje = "Bienvenido";
                        }
            }
        });
            }
            setTimeout('imprime()',500);
    });
    
    function imprime(){
        let div,a;
        if(mensaje==="Bienvenido"){
            div = `<div id="mensaje" class="alert alert-primary" role="alert">
            <h5 id="error"></h5>`;
            a=13;
        }else{
            div = `<div id="mensaje" class="alert alert-danger" role="alert">
            <h5 id="error"></h5>`;
        }
        
        $('#alerta').html(div);

        $('#error').html(mensaje);
        if(a===13)
        setTimeout('iniciar()',100);

    }
    function iniciar() {
        
        $.ajax({
            url: 'ids.php',
            type: 'GET',
            success: function () {
//                console.log("response");
//                console.log(response);
//                console.log("");
                
//                console.log("objeto = JSON.parse(response);");
//                console.log(objeto = JSON.parse(response));
//                objeto = JSON.parse(response);
//                                console.log("");

//                console.log("objeto[0]");
//                console.log(objeto[0]);
//                                console.log("");
//
//                if (objeto.length === 0) {
//                    mensaje = "credenciales incorrectas";
//                } else {
//                    mensaje = "Bienvenido";
//                        }
            }
        });
        
        window.location = "/agecit/empresa"; 
    }
    
    //modal para NUEVO

$('#btncod').click(function (e){
        e.preventDefault();
        console.log("clic en validar");
        if($('#codigo').val()===""){
            mencod="Ingrese el codigo";
        }
        else{
            let postDataJS = {
            cod: $('#codigo').val()
        };
            console.log("postDataJS");
            console.log(postDataJS);
                console.log("");

            $.ajax({
            url: 'vda2.php',
            type: 'POST',
            data: postDataJS,
            success: function (response) {
//                console.log("response");
//                console.log(response);
//                console.log("");
                
//                console.log("objeto = JSON.parse(response);");
//                console.log(objeto = JSON.parse(response));
                objeto = JSON.parse(response);
//                                console.log("");

//                console.log("objeto[0]");
//                console.log(objeto[0]);
//                                console.log("");

                if (objeto.length === 0) {
                    mencod = "codigo  incorrecto, favor de verificar";
                } else {
                    mencod = "correcto";
                        }
            }
        });
            }
            setTimeout('imprime2()',500);
    });
    
    function imprime2(){
        let div,a;
        if(mencod==="correcto"){
            div = `<div id="mencod" class="alert alert-primary" role="alert">
            <h5 id="error2"></h5>`;
            a=13;
        }else{
            div = `<div id="mencod" class="alert alert-danger" role="alert">
            <h5 id="error2"></h5>`;
        }
        
        $('#alerta2').html(div);

        $('#error2').html(mencod);
        if(a===13)
        setTimeout('iniciar2()',1000);

    }
    function iniciar2() {
        window.location = "/agecit/registro/persona"; 
    }
    