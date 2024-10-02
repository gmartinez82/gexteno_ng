<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoOrigenFactura::setSesPag($pag);

$criterio = new Criterio(PdeTipoOrigenFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoOrigenFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_origen_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoOrigenFactura::getSesPagCantidad(), PdeTipoOrigenFactura::getSesPag());
$pde_tipo_origen_facturas = PdeTipoOrigenFactura::getPdeTipoOrigenFacturasDesdeBackend($paginador, $criterio);

include 'pde_tipo_origen_factura_datos.php';
?>

