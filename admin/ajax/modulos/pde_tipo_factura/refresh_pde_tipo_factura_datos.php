<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoFactura::setSesPag($pag);

$criterio = new Criterio(PdeTipoFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoFactura::getSesPagCantidad(), PdeTipoFactura::getSesPag());
$pde_tipo_facturas = PdeTipoFactura::getPdeTipoFacturasDesdeBackend($paginador, $criterio);

include 'pde_tipo_factura_datos.php';
?>

