<?php
                include_once("conexion.php"); 
                $database = new Connection();
                $db = $database->open();
                $id=$_POST['id'];
                try{    
                    $sql = 'SELECT c.id_cita as cita, m.nombre as medico, p.nombre as paciente
                            FROM cita c LEFT JOIN medico m on (c.id_medico=m.id) left join paciente p on (c.id_paciente=p.id) WHERE id_cita='.$id.';';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'id' => $row['cita'],
                             'med' => $row['medico'],
                             'pac' => $row['paciente'],
                                     
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