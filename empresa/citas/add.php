<?php
echo "entre a add.php";

$med = $_POST['med'];
$pac = $_POST['pac'];

echo " el med ->".$med." y el pac ->".$pac;

include_once ("conexion.php");
             $database = new Connection();
             $db = $database->open();


                try{
                    $stmt = $db->prepare("INSERT INTO cita (id_servicio,id_paciente) VALUES (:med, :pac)");
    if ($stmt->execute(array(':med' => $_POST['med'], ':pac' => $_POST['pac']))) {
        $output['message'] = 'Agregado correctamente';
    } else {
        $output['error'] = true;
        $output['message'] = 'Ocurrió un error al agregar. No se pudo agregar';
    }
}
    catch(PDOException $e){
        echo "Se tiene un problema en la connecxion: " . $e->getMessage();
    }
    
     //cerrar conexión
    $database->close();

?>
