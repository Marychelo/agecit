<?php
                include_once("conexion.php"); 
                $database = new Connection();
                $db = $database->open();
                $id=$_POST['id'];
                try{    
                    $sql = 'SELECT id_cita,id_servicio ,id_paciente
                            FROM cita WHERE cita.id_cita='.$id.';';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'ids' => $row['id_servicio'],
                             'idp' => $row['id_paciente'],
                             
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