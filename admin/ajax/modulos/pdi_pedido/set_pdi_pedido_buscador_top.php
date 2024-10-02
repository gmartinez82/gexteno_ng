<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdiPedido::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pdi_pedido.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pdi_pedido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido.nota_publica', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido.nota_interna', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_tipo_origen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_tipo_origen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_tipo_origen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_urgencia.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_urgencia.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_urgencia.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pdi_pedido.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id', 'LEFT JOIN');
$criterio->addRealJoin('pdi_urgencia', 'pdi_urgencia.id', 'pdi_pedido.pdi_urgencia_id', 'LEFT JOIN');
$criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_pedido.pdi_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('pdi_pedido_agrupacion', 'pdi_pedido_agrupacion.id', 'pdi_pedido.pdi_pedido_agrupacion_id', 'LEFT JOIN');
$criterio->addRealJoin('pdi_pedido_agrupacion_item', 'pdi_pedido_agrupacion_item.id', 'pdi_pedido.pdi_pedido_agrupacion_item_id', 'LEFT JOIN');
    
$criterio->addTabla('pdi_pedido');
$criterio->setCriterios();

