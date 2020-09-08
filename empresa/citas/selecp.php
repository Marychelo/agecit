<?php
                include_once("conexion.php"); 
                $database = new Connection();
                $db = $database->open();

                try{    
                    $sql = 'SELECT id , nombre
                            FROM paciente;';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'id' => $row['id'],
                             'nombrep' => $row['nombre'],               
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