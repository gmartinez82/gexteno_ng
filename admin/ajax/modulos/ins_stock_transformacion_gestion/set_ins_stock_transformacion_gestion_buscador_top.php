<?php
include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador');

$criterio = new Criterio(InsStockTransformacion::SES_CRITERIOS);
$criterio->setAmbiguo(true);

$criterio->add('ins_stock_transformacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_transformacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_transformacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_transformacion.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_transformacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_transformacion.orden', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_transformacion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_transformacion.creado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_transformacion.creado_por', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_transformacion.modificado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_transformacion.modificado_por', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_stock_transformacion.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_stock_transformacion.pan_panol_id', 'LEFT JOIN');
$criterio->addTabla('ins_stock_transformacion');
$criterio->setCriterios();
?>

