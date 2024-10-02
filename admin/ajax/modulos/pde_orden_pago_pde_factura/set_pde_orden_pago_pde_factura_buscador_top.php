<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeOrdenPagoPdeFactura::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeOrdenPagoPdeFactura::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_orden_pago_pde_factura.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_orden_pago_pde_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_pde_factura.importe_afectado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_pde_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_pde_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_pde_factura.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_orden_pago_pde_factura.pde_orden_pago_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_orden_pago_pde_factura.pde_factura_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_orden_pago_pde_factura');
$criterio->setCriterios();

