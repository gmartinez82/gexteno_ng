<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPuntoVentaActual::setSesPag($pag);

$criterio = new Criterio(VtaPuntoVentaActual::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPuntoVentaActual::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_punto_venta_actual');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPuntoVentaActual::getSesPagCantidad(), VtaPuntoVentaActual::getSesPag());
$vta_punto_venta_actuals = VtaPuntoVentaActual::getVtaPuntoVentaActualsDesdeBackend($paginador, $criterio);

include 'vta_punto_venta_actual_datos.php';
?>

