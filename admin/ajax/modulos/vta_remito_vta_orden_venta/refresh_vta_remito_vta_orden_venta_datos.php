<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaRemitoVtaOrdenVenta::setSesPag($pag);

$criterio = new Criterio(VtaRemitoVtaOrdenVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaRemitoVtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_remito_vta_orden_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaRemitoVtaOrdenVenta::getSesPagCantidad(), VtaRemitoVtaOrdenVenta::getSesPag());
$vta_remito_vta_orden_ventas = VtaRemitoVtaOrdenVenta::getVtaRemitoVtaOrdenVentasDesdeBackend($paginador, $criterio);

include 'vta_remito_vta_orden_venta_datos.php';
?>

