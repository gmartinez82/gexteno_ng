<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVenta::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVenta::getSesPagCantidad(), VtaOrdenVenta::getSesPag());
$vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentasDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_datos.php';
?>

