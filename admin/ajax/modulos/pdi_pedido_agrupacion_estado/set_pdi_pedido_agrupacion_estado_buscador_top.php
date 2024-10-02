<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdiPedidoAgrupacionEstado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdiPedidoAgrupacionEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pdi_pedido_agrupacion_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pdi_pedido_agrupacion_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pdi_pedido_agrupacion', 'pdi_pedido_agrupacion.id', 'pdi_pedido_agrupacion_estado.pdi_pedido_agrupacion_id', 'LEFT JOIN');
$criterio->addRealJoin('pdi_pedido_agrupacion_tipo_estado', 'pdi_pedido_agrupacion_tipo_estado.id', 'pdi_pedido_agrupacion_estado.pdi_pedido_agrupacion_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('pdi_pedido_agrupacion_estado');
$criterio->setCriterios();

