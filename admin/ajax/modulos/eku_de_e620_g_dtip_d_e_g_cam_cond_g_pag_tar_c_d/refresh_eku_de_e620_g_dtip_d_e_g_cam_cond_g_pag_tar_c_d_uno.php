<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = EkuDeE620GDtipDEGCamCondGPagTarCD::getOxId($id);

$estado = ($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_uno.php';
?>

