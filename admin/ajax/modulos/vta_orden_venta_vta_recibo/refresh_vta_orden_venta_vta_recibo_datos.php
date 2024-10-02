<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVentaVtaRecibo::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVentaVtaRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVentaVtaRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta_vta_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVentaVtaRecibo::getSesPagCantidad(), VtaOrdenVentaVtaRecibo::getSesPag());
$vta_orden_venta_vta_recibos = VtaOrdenVentaVtaRecibo::getVtaOrdenVentaVtaRecibosDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_vta_recibo_datos.php';
?>

