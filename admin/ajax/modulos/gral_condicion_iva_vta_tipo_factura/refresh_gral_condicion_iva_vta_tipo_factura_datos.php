<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCondicionIvaVtaTipoFactura::setSesPag($pag);

$criterio = new Criterio(GralCondicionIvaVtaTipoFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCondicionIvaVtaTipoFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_condicion_iva_vta_tipo_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCondicionIvaVtaTipoFactura::getSesPagCantidad(), GralCondicionIvaVtaTipoFactura::getSesPag());
$gral_condicion_iva_vta_tipo_facturas = GralCondicionIvaVtaTipoFactura::getGralCondicionIvaVtaTipoFacturasDesdeBackend($paginador, $criterio);

include 'gral_condicion_iva_vta_tipo_factura_datos.php';
?>

