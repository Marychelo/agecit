<?php
                include_once("conexion.php"); 
                $database = new Connection();
                $db = $database->open();

                try{    
                    $sql = 'SELECT c.id_cita as cita, cos.nombre as nombrec,cos.costo as costo, p.nombre as paciente
                            FROM cita c LEFT JOIN costos cos on (c.id_servicio=cos.id) left join paciente p on (c.id_paciente=p.id);';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'id' => $row['cita'],
                             'med' => $row['nombrec'],
                             'cos' => $row['costo'],
                             'pac' => $row['paciente']     
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