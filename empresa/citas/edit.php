<?php
include_once('conexion.php');
echo "el ID en php.del es=".$_POST['id'];
echo "el med en php.del es=".$_POST['med'];
echo "el pac en php.del es=".$_POST['pac'];
$output = array('error' => false);

$database = new Connection();
$db = $database->open();
try {
    $sql = "UPDATE cita SET id_servicio ='".$_POST['med']."', id_paciente='".$_POST['pac']."'  WHERE id_cita = '" . $_POST['id'] . "'";
    if ($db->exec($sql)) {
        $output['message'] = 'Modificado correctamente';
    } else {
        $output['error'] = true;
        $output['message'] = 'Ocurrió un error. No se pudo Modificar';
        $output['sql'] = $sql;
    }
} catch (PDOException $e) {
    $output['error'] = true;
    $output['message'] = $e->getMessage();
    ;
}
$database->close();
echo json_encode($output);
?>