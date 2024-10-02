<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(MlAttribute::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
MlAttribute::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ml_attribute.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ml_attribute.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute.codigo_ml', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute.tooltip', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute_type.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute_type.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute_type.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ml_attribute_type', 'ml_attribute_type.id', 'ml_attribute.ml_attribute_type_id', 'LEFT JOIN');
    
$criterio->addTabla('ml_attribute');
$criterio->setCriterios();

