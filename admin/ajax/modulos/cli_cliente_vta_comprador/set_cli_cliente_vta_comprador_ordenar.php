<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(CliClienteVtaComprador::SES_CRITERIOS);
$criterio->addTabla('cli_cliente_vta_comprador');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

