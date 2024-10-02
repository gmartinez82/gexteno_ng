<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_j001_g_cam_fu_f_d = EkuDeJ001GCamFuFD::getOxId($id);

$estado = ($eku_de_j001_g_cam_fu_f_d->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_j001_g_cam_fu_f_d_uno.php';
?>

