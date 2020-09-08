<?php

include_once ("../../bd/conexion.php");
             $database = new Connection();
             $db = $database->open();


                try{
                    $stmt = $db->prepare("INSERT INTO dueño (idu,ide,fecha) VALUES (:idp, :ide, NOW())");
    if ($stmt->execute(array(':idp' => $_POST['idp'], ':ide' => $_POST['ide']))) {
        $output['message'] = 'Agregado correctamente el dueño a la empresa';
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
