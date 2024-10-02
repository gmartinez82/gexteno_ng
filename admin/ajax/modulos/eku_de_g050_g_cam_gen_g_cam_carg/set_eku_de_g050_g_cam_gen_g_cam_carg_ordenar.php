<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(EkuDeG050GCamGenGCamCarg::SES_CRITERIOS);
$criterio->addTabla('eku_de_g050_g_cam_gen_g_cam_carg');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

