<?php
                session_start();
                include_once($_SESSION['url']."bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();

                try{    
                    $sql = 'SELECT id, ide, nombre, costo, estado, fecha,fecham
                            FROM servicio;';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'id' => $row['id'],
                             'ide' => $row['ide'],
                             'costo' => $row['costo'],
                             'nombre' => $row['nombre'],
                             'estado' => $row['estado'],
                             'fecha' => $row['fecha'],
                             'fecham' => $row['fecham']
                                     
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