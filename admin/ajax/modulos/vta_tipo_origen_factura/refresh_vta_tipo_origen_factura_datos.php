<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoOrigenFactura::setSesPag($pag);

$criterio = new Criterio(VtaTipoOrigenFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoOrigenFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_origen_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoOrigenFactura::getSesPagCantidad(), VtaTipoOrigenFactura::getSesPag());
$vta_tipo_origen_facturas = VtaTipoOrigenFactura::getVtaTipoOrigenFacturasDesdeBackend($paginador, $criterio);

include 'vta_tipo_origen_factura_datos.php';
?>

