<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_g050_g_cam_gen_g_cam_carg = EkuDeG050GCamGenGCamCarg::getOxId($id);

$estado = ($eku_de_g050_g_cam_gen_g_cam_carg->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_g050_g_cam_gen_g_cam_carg_uno.php';
?>

