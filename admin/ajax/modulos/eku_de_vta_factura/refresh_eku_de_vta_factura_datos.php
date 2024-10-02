<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeVtaFactura::setSesPag($pag);

$criterio = new Criterio(EkuDeVtaFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeVtaFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_vta_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeVtaFactura::getSesPagCantidad(), EkuDeVtaFactura::getSesPag());
$eku_de_vta_facturas = EkuDeVtaFactura::getEkuDeVtaFacturasDesdeBackend($paginador, $criterio);

include 'eku_de_vta_factura_datos.php';
?>

