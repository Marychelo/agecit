<?php
                session_start();
                include_once($_SESSION['url']."bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();
                $id=$_POST['id'];
                try{    
                    $sql = 'SELECT id as cita, idu as usuario, ids as servicio, fecha, hora
                            FROM cita
                            WHERE id='.$id.';';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'cita' => $row['cita'],
                             'usuario' => $row['usuario'],
                             'servicio' => $row['servicio'],
                             'fecha' => $row['fecha'],
                             'hora' => $row['hora'],
                                     
                     );
                     }
                     $jsonstring = json_encode($jsonPhp);
                     echo $jsonstring;
    }
    catch(PDOException $e){
        echo "Se tiene un problema en la connecxion: " . $e->getMessage();
    }
 
    //cerrar conexión
    $database->close();
     
?>