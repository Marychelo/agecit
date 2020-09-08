<?php

include_once ("../../bd/conexion.php");
             $database = new Connection();
             $db = $database->open();


                try{
                    $stmt = $db->prepare("INSERT INTO usuario (nombre,apellidos,celular,email,pass,tipou,fecha,fecham) VALUES (:nom, :ape, :cel, :ema, :pas, :tipou, NOW(), NOW())");
    if ($stmt->execute(array(':nom' => $_POST['nom'], ':ape' => $_POST['ape'], ':cel' => $_POST['cel'], ':ema' => $_POST['ema'], ':pas' => $_POST['pas'], ':tipou' => 2))) {
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
