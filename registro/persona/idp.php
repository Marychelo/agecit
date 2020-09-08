<?php
                session_start();
 
                include_once("../../bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();
                try{    
                    $sql = 'SELECT id
                            FROM usuario WHERE celular='.'"'.$_POST['cel'].'";';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         
                         $_SESSION['idp']=$row['id'];

                     }

    }
    catch(PDOException $e){
        echo "Se tiene un problema en la connecxion: " . $e->getMessage();
    }
 
    //cerrar conexión
    $database->close();
     
?>