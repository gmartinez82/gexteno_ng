<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVentaEstadoFacturacion::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVentaEstadoFacturacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVentaEstadoFacturacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta_estado_facturacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVentaEstadoFacturacion::getSesPagCantidad(), VtaOrdenVentaEstadoFacturacion::getSesPag());
$vta_orden_venta_estado_facturacions = VtaOrdenVentaEstadoFacturacion::getVtaOrdenVentaEstadoFacturacionsDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_estado_facturacion_datos.php';
?>

