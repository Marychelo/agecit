<?php
                session_start();
                include_once($_SESSION['url']."bd/conexion.php"); 
             $database = new Connection();
             $db = $database->open();


                try{
                    $stmt = $db->prepare("INSERT INTO usuario (nombre,apellidos,celular,correo,pass,fecha,fecham) VALUES (:nombre,:apellidos,:celular,:correo,:pass, NOW(),NOW())");
    if ($stmt->execute(array(':nombre' => $_POST['nombre'], ':apellidos' => $_POST['apellidos'], ':celular' => $_POST['celular'], ':correo' => $_POST['correo'], ':pass' => $_POST['pass']))) {
        $output['message'] = 'Agregado correctamente';
    } else {
        $output['error'] = true;
        $output['message'] = 'Ocurrió un error al agregar. No se pudo agregar';
    }
}
    catch(PDOException $e){
        echo "Se tiene un problema en la connecxion: " . $e->getMessage();
    }
    
     //cerrar conexión
    $database->close();

?>
