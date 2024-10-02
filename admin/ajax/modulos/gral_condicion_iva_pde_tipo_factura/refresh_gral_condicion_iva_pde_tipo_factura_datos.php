<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCondicionIvaPdeTipoFactura::setSesPag($pag);

$criterio = new Criterio(GralCondicionIvaPdeTipoFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCondicionIvaPdeTipoFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_condicion_iva_pde_tipo_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCondicionIvaPdeTipoFactura::getSesPagCantidad(), GralCondicionIvaPdeTipoFactura::getSesPag());
$gral_condicion_iva_pde_tipo_facturas = GralCondicionIvaPdeTipoFactura::getGralCondicionIvaPdeTipoFacturasDesdeBackend($paginador, $criterio);

include 'gral_condicion_iva_pde_tipo_factura_datos.php';
?>

