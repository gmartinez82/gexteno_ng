<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlShippingMode::setSesPag($pag);

$criterio = new Criterio(MlShippingMode::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlShippingMode::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_shipping_mode');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlShippingMode::getSesPagCantidad(), MlShippingMode::getSesPag());
$ml_shipping_modes = MlShippingMode::getMlShippingModesDesdeBackend($paginador, $criterio);

include 'ml_shipping_mode_datos.php';
?>

