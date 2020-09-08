<?php
                include_once("conexion.php"); 
                $database = new Connection();
                $db = $database->open();

                try{    
                    $sql = 'SELECT id , nombre, costo
                            FROM costos;';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'id' => $row['id'],
                             'nombrem' => $row['nombre'],               
                             'costo' => $row['costo']               
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