<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(EkuDeG001GCamGen::SES_CRITERIOS);
$criterio->addTabla('eku_de_g001_g_cam_gen');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

