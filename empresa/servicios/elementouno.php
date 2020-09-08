<?php
            session_start();
            include_once($_SESSION['url']."bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();
                $id=$_POST['id'];
                try{    
                    $sql = 'SELECT id,ide,nombre, estado, costo, fecha, fecham
                            FROM servicio WHERE id='.$id.';';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'id' => $row['id'],
                             'ide' => $row['ide'],
                             'nombre' => $row['nombre'],
                             'costo' => $row['costo'],
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