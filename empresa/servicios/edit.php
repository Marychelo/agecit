<?php
            session_start();
            include_once($_SESSION['url']."bd/conexion.php"); 
echo "el ID en php.del es=".$_POST['id'];

$output = array('error' => false);

$database = new Connection();
$db = $database->open();
try {
    $sql = "UPDATE servicio SET nombre ='".$_POST['nombre']."', costo='".$_POST['costo']."', fecham=NOW()  WHERE id = '" . $_POST['id'] . "' and ide='" . $_SESSION['ide'] . "'";
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