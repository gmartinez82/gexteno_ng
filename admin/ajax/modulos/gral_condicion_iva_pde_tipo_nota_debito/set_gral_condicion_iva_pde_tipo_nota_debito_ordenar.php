<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(GralCondicionIvaPdeTipoNotaDebito::SES_CRITERIOS);
$criterio->addTabla('gral_condicion_iva_pde_tipo_nota_debito');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

