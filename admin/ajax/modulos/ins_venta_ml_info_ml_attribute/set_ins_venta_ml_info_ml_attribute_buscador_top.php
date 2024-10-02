<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsVentaMlInfoMlAttribute::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
InsVentaMlInfoMlAttribute::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ins_venta_ml_info_ml_attribute.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_venta_ml_info_ml_attribute.ml_value_valor', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info_ml_attribute.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_value.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_value.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_value.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_venta_ml_info', 'ins_venta_ml_info.id', 'ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id', 'LEFT JOIN');
$criterio->addRealJoin('ml_attribute', 'ml_attribute.id', 'ins_venta_ml_info_ml_attribute.ml_attribute_id', 'LEFT JOIN');
$criterio->addRealJoin('ml_value', 'ml_value.id', 'ins_venta_ml_info_ml_attribute.ml_value_id', 'LEFT JOIN');
    
$criterio->addTabla('ins_venta_ml_info_ml_attribute');
$criterio->setCriterios();

