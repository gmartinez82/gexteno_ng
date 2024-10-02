<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFacturaVtaOrdenVenta::setSesPag($pag);

$criterio = new Criterio(VtaFacturaVtaOrdenVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFacturaVtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura_vta_orden_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFacturaVtaOrdenVenta::getSesPagCantidad(), VtaFacturaVtaOrdenVenta::getSesPag());
$vta_factura_vta_orden_ventas = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentasDesdeBackend($paginador, $criterio);

include 'vta_factura_vta_orden_venta_datos.php';
?>

