<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaComisionVtaFactura::setSesPag($pag);

$criterio = new Criterio(VtaComisionVtaFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaComisionVtaFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_comision_vta_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaComisionVtaFactura::getSesPagCantidad(), VtaComisionVtaFactura::getSesPag());
$vta_comision_vta_facturas = VtaComisionVtaFactura::getVtaComisionVtaFacturasDesdeBackend($paginador, $criterio);

include 'vta_comision_vta_factura_datos.php';
?>

