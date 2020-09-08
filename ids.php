<?php
                session_start();
 
                include_once("bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();
                try{    
                    $sql = 'SELECT ide
                            FROM dueño WHERE idu='.'"'.$_SESSION['idu'].'"'.';';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         
                         $_SESSION['ide']=$row['ide'];
                     }
                     echo "recibi los id";
    }
    catch(PDOException $e){
        echo "Se tiene un problema en la connecxion: " . $e->getMessage();
    }
 
    //cerrar conexión
    $database->close();
     
?>