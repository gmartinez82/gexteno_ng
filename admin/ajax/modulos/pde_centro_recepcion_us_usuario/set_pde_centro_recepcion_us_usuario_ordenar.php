<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PdeCentroRecepcionUsUsuario::SES_CRITERIOS);
$criterio->addTabla('pde_centro_recepcion_us_usuario');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

