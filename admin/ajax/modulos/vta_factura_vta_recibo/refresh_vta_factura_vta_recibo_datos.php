<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFacturaVtaRecibo::setSesPag($pag);

$criterio = new Criterio(VtaFacturaVtaRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFacturaVtaRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura_vta_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFacturaVtaRecibo::getSesPagCantidad(), VtaFacturaVtaRecibo::getSesPag());
$vta_factura_vta_recibos = VtaFacturaVtaRecibo::getVtaFacturaVtaRecibosDesdeBackend($paginador, $criterio);

include 'vta_factura_vta_recibo_datos.php';
?>

