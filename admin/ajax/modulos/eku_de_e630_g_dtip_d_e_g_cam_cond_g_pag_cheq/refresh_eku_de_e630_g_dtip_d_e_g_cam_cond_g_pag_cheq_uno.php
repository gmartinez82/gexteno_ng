<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq = EkuDeE630GDtipDEGCamCondGPagCheq::getOxId($id);

$estado = ($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_uno.php';
?>

