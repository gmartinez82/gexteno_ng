<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoFactura::setSesPag($pag);

$criterio = new Criterio(VtaTipoFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoFactura::getSesPagCantidad(), VtaTipoFactura::getSesPag());
$vta_tipo_facturas = VtaTipoFactura::getVtaTipoFacturasDesdeBackend($paginador, $criterio);

include 'vta_tipo_factura_datos.php';
?>

