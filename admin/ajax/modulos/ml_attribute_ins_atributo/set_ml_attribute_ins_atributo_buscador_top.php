<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(MlAttributeInsAtributo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
MlAttributeInsAtributo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ml_attribute_ins_atributo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ml_attribute_ins_atributo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_attribute.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_atributo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_atributo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_atributo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ml_attribute', 'ml_attribute.id', 'ml_attribute_ins_atributo.ml_attribute_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_atributo', 'ins_atributo.id', 'ml_attribute_ins_atributo.ins_atributo_id', 'LEFT JOIN');
    
$criterio->addTabla('ml_attribute_ins_atributo');
$criterio->setCriterios();

