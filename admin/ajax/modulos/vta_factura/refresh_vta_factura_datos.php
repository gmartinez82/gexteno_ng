<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFactura::setSesPag($pag);

$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFactura::getSesPagCantidad(), VtaFactura::getSesPag());
$vta_facturas = VtaFactura::getVtaFacturasDesdeBackend($paginador, $criterio);

include 'vta_factura_datos.php';
?>

