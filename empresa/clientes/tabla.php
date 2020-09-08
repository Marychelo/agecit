<?php
                session_start();
                include_once($_SESSION['url']."bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();

                try{    
                    $sql = 'SELECT u.id, u.nombre, u.apellidos, u.celular, u.email, u.fecha
                    FROM afiliado a
                    LEFT JOIN usuario u ON (a.idu=u.id)
                    WHERE ide = "'. $_SESSION['ide'] .'" ;';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'id' => $row['id'],
                             'nombre' => $row['nombre'],
                             'apellidos' => $row['apellidos'],
                             'celular' => $row['celular'],
                             'email' => $row['email'],
                             'fecha' => $row['fecha'],
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