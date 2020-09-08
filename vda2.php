<?php
                session_start();
 
                include_once("bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();
                try{    
                    $sql = 'SELECT id
                            FROM empresa WHERE codigo='.'"'.$_POST['cod'].'"'.';';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         
                         $_SESSION['ide']=$row['id'];

                         $jsonPhp [] = array(
                            'id' => $row['id']
                     );
                     }
                     $jsonstring = json_encode($jsonPhp);
                     echo $jsonstring;
    }
    catch(PDOException $e){
        echo "Se tiene un problema en la connecxion: " . $e->getMessage();
    }
 // arriba sacamos el id del codigo ingresado 
 // enseguida sacaremos el id de la persona que acaba de registrarse

//    try{    
//                    $sql = 'SELECT id
//                            FROM persona WHERE celular='.'"'.$_SESSION['cel'].'"'.';';
//                    
//                    $jsonPhp = array();
//                     foreach ($db->query($sql) as $row) {
//                         $_SESSION['idp']=$row['id'];
//                     }
//    }
//    catch(PDOException $e){
//        echo "Se tiene un problema en la connecxion: " . $e->getMessage();
//    }
    //cerrar conexión
    $database->close();
     
?>