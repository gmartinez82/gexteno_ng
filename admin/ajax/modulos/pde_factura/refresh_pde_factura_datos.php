<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFactura::setSesPag($pag);

$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFactura::getSesPagCantidad(), PdeFactura::getSesPag());
$pde_facturas = PdeFactura::getPdeFacturasDesdeBackend($paginador, $criterio);

include 'pde_factura_datos.php';
?>

