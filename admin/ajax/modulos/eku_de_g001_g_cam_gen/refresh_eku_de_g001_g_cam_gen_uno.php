<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_g001_g_cam_gen = EkuDeG001GCamGen::getOxId($id);

$estado = ($eku_de_g001_g_cam_gen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_g001_g_cam_gen_uno.php';
?>

