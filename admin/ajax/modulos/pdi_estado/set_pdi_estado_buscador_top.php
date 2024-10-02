<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdiEstado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdiEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pdi_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pdi_estado.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_estado.cantidad_stock_real', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_estado.cantidad_stock_comprometida', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_estado.fechahora', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_estado.venta_perdida', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pdi_pedido', 'pdi_pedido.id', 'pdi_estado.pdi_pedido_id', 'LEFT JOIN');
$criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_estado.pdi_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('pdi_estado');
$criterio->setCriterios();

