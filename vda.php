<?php
                session_start();
 
                include_once("bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();
                try{    
                    $sql = 'SELECT id,nombre, apellidos,tipou
                            FROM usuario WHERE email='.'"'.$_POST['usu'].'"'.'and pass='.'"'.$_POST['pas'].'"'.';';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         
                         $_SESSION['idu']=$row['id'];
                         $_SESSION['tipou']=$row['tipou'];
                         $_SESSION['nombreu']=$row['nombre'];
                         $_SESSION['apellidou']=$row['apellidos'];

                         $jsonPhp [] = array(
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