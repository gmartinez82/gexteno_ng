<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCreditoVtaFacturaVtaOrdenVenta::setSesPag($pag);

$criterio = new Criterio(VtaNotaCreditoVtaFacturaVtaOrdenVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaCreditoVtaFacturaVtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_credito_vta_factura_vta_orden_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCreditoVtaFacturaVtaOrdenVenta::getSesPagCantidad(), VtaNotaCreditoVtaFacturaVtaOrdenVenta::getSesPag());
$vta_nota_credito_vta_factura_vta_orden_ventas = VtaNotaCreditoVtaFacturaVtaOrdenVenta::getVtaNotaCreditoVtaFacturaVtaOrdenVentasDesdeBackend($paginador, $criterio);

include 'vta_nota_credito_vta_factura_vta_orden_venta_datos.php';
?>

