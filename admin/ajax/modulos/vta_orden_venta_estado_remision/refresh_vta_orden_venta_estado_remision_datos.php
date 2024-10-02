<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVentaEstadoRemision::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVentaEstadoRemision::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVentaEstadoRemision::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta_estado_remision');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVentaEstadoRemision::getSesPagCantidad(), VtaOrdenVentaEstadoRemision::getSesPag());
$vta_orden_venta_estado_remisions = VtaOrdenVentaEstadoRemision::getVtaOrdenVentaEstadoRemisionsDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_estado_remision_datos.php';
?>

