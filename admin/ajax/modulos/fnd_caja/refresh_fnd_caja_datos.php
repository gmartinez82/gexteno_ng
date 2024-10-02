<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCaja::setSesPag($pag);

$criterio = new Criterio(FndCaja::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCaja::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCaja::getSesPagCantidad(), FndCaja::getSesPag());
$fnd_cajas = FndCaja::getFndCajasDesdeBackend($paginador, $criterio);

include 'fnd_caja_datos.php';
?>

