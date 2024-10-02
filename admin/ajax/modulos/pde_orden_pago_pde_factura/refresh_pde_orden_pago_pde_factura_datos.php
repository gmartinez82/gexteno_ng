<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOrdenPagoPdeFactura::setSesPag($pag);

$criterio = new Criterio(PdeOrdenPagoPdeFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOrdenPagoPdeFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_orden_pago_pde_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOrdenPagoPdeFactura::getSesPagCantidad(), PdeOrdenPagoPdeFactura::getSesPag());
$pde_orden_pago_pde_facturas = PdeOrdenPagoPdeFactura::getPdeOrdenPagoPdeFacturasDesdeBackend($paginador, $criterio);

include 'pde_orden_pago_pde_factura_datos.php';
?>

