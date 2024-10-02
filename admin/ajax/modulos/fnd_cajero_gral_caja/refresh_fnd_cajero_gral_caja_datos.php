<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajeroGralCaja::setSesPag($pag);

$criterio = new Criterio(FndCajeroGralCaja::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajeroGralCaja::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_cajero_gral_caja');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajeroGralCaja::getSesPagCantidad(), FndCajeroGralCaja::getSesPag());
$fnd_cajero_gral_cajas = FndCajeroGralCaja::getFndCajeroGralCajasDesdeBackend($paginador, $criterio);

include 'fnd_cajero_gral_caja_datos.php';
?>

