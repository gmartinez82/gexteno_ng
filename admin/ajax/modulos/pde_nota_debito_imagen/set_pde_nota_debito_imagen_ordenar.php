<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PdeNotaDebitoImagen::SES_CRITERIOS);
$criterio->addTabla('pde_nota_debito_imagen');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

