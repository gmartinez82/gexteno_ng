<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(EkuDeB001GOpeDE::SES_CRITERIOS);
$criterio->addTabla('eku_de_b001_g_ope_d_e');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

