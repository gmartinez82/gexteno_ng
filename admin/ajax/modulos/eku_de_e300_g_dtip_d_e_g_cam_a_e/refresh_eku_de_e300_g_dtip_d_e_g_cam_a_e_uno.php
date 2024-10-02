<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e300_g_dtip_d_e_g_cam_a_e = EkuDeE300GDtipDEGCamAE::getOxId($id);

$estado = ($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e300_g_dtip_d_e_g_cam_a_e_uno.php';
?>

