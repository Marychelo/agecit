<?php
            session_start();
                include_once("../bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();

                try{    
                    $sql = 'SELECT c.id AS folio, c.fecha AS fecha, c.hora AS hora, u.nombre AS usuario, u.apellidos AS apellidos, s.nombre AS servicio, c.estado AS estado
                    FROM cita c 
                    LEFT JOIN usuario u ON (c.`idu`=u.`id`)
                    LEFT JOIN servicio s ON (c.`ids`=s.`id`) ORDER BY hora;';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'folio' => $row['folio'],
                             'fecha' => $row['fecha'],
                             'hora' => $row['hora'],
                             'usuario' => $row['usuario'],
                             'apellidos' => $row['apellidos'],
                             'servicio' => $row['servicio'],
                             'estado' => $row['estado']
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