<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::SES_CRITERIOS);
$criterio->addTabla('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

