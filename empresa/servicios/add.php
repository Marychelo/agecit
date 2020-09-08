<?php
            session_start();
            include_once($_SESSION['url']."bd/conexion.php"); 
             $database = new Connection();
             $db = $database->open();


                try{
                    $stmt = $db->prepare("INSERT INTO servicio (ide,estado,costo,nombre,fecha,fecham) VALUES (:ide,1,:costo, :nombre, NOW(),NOW())");
    if ($stmt->execute(array(':costo' => $_POST['costo'], ':nombre' => $_POST['nombre'], ':ide' => $_SESSION['ide']))) {
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
