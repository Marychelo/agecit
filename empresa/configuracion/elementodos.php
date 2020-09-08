<?php
                session_start();
                include_once("../../bd/conexion.php"); 
                $database = new Connection();
                $db = $database->open();
                $id=$_SESSION['ide'];
                try{    
                    $sql = 'SELECT id,nombre, telefono, calle, numero,  cp,  estado, municipio, hini, hfin, lunes,martes,miercoles,jueves,viernes,sabado,domingo, email, fechar, fecham
                            FROM empresa WHERE id='.$id.';';
                    
                    $jsonPhp = array();
                     foreach ($db->query($sql) as $row) {
                         $jsonPhp [] = array(
                             'id' => $row['id'],
                             'nombre' => $row['nombre'],
                             'telefono' => $row['telefono'],
                             'calle' => $row['calle'],
                             'numero' => $row['numero'],
                             'cp' => $row['cp'],
                             'estado' => $row['estado'],
                             'municipio' => $row['municipio'],
                             'hini' => $row['hini'],
                             'hfin' => $row['hfin'],
                             'lunes' => $row['lunes'],
                             'martes' => $row['martes'],
                             'miercoles' => $row['miercoles'],
                             'jueves' => $row['jueves'],
                             'viernes' => $row['viernes'],
                             'sabado' => $row['sabado'],
                             'domingo' => $row['domingo'],
                             'email' => $row['email'],
                             'fecha' => $row['fechar'],
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