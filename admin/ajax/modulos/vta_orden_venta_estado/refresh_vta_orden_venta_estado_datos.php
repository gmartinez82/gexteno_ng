<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVentaEstado::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVentaEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVentaEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVentaEstado::getSesPagCantidad(), VtaOrdenVentaEstado::getSesPag());
$vta_orden_venta_estados = VtaOrdenVentaEstado::getVtaOrdenVentaEstadosDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_estado_datos.php';
?>

