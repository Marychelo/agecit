<?php

session_start();
include_once("../bd/conexion.php"); 
             $database = new Connection();
             $db = $database->open();


                try{
                    $stmt = $db->prepare("INSERT INTO cita (fecha,hora,idu,ids,estado) VALUES (:fecha, :hora, :idu, :ids, :estado)");
    if ($stmt->execute(array(':fecha' => $_POST['fecha'], ':hora' => $_POST['hora'], ':idu' => $_POST['usuario'], ':ids' => $_POST['servicio'], ':estado' => 0))) {
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
