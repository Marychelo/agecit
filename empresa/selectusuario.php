<?php
                session_start();
                include_once($_SESSION['url']."bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();

                try{    
                    $sql = 'SELECT u.id , u.nombre, u.apellidos
                    FROM usuario u
                    LEFT JOIN afiliado a ON (a.idu=u.id)
                    LEFT JOIN empresa e ON (a.ide=e.id)
                    WHERE e.id = 2;';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'id' => $row['id'],
                             'nombre' => $row['nombre'],               
                             'apellidos' => $row['apellidos']               
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