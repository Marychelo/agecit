<?php
                session_start();
                include_once($_SESSION['url']."bd/conexion.php"); 
$output = array('error' => false);

$database = new Connection();
$db = $database->open();
try {
    $sql = "UPDATE cita SET ids ='".$_POST['servicio']."', idu='".$_POST['usuario']."', fecha='".$_POST['fecha']."', hora='".$_POST['hora']."'  WHERE id = '" . $_POST['id'] . "'";
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