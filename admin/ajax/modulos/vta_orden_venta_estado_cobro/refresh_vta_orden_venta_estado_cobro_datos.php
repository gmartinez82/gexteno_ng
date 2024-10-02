<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVentaEstadoCobro::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVentaEstadoCobro::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVentaEstadoCobro::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta_estado_cobro');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVentaEstadoCobro::getSesPagCantidad(), VtaOrdenVentaEstadoCobro::getSesPag());
$vta_orden_venta_estado_cobros = VtaOrdenVentaEstadoCobro::getVtaOrdenVentaEstadoCobrosDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_estado_cobro_datos.php';
?>

