<?php
session_start();
$_SESSION['i']=$_POST['id'];
include_once('../../bd/conexion.php');

$output = array('error' => false);

$database = new Connection();
$db = $database->open();
try {
    $sql = "UPDATE empresa SET nombre ='".$_POST['nom']."',telefono ='".$_POST['tel']."',calle ='".$_POST['cal']."',numero ='".$_POST['num']
            ."',cp ='".$_POST['cp']."',estado ='".$_POST['est']."',municipio ='".$_POST['mun']."',hini ='".$_POST['hin']
            ."',hfin ='".$_POST['hfi']."',lunes ='".$_POST['lu']."',martes ='".$_POST['m']."',miercoles ='".$_POST['mx']
            ."',jueves ='".$_POST['j']."',viernes ='".$_POST['v']."',sabado ='".$_POST['s']."',domingo ='".$_POST['d']
            ."',correo ='".$_POST['ema']."',fechar = NOW(),fecham = NOW() WHERE id = '" . $_POST['id'] . "'";
    if ($db->exec($sql)) {
        $output['message'] = 'Empresa registrada correctamente';
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