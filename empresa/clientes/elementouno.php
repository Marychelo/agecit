<?php
                session_start();
                include_once($_SESSION['url']."bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();
                $id=$_POST['id'];
                try{    
                    $sql = 'SELECT id,nombre, apellidos, celular, email, pass, fecha, fecham
                            FROM usuario WHERE id='.$id.';';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'id' => $row['id'],
                             'nombre' => $row['nombre'],
                             'apellidos' => $row['apellidos'],
                             'celular' => $row['celular'],
                             'email' => $row['email'],
                             'pass' => $row['pass'],
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