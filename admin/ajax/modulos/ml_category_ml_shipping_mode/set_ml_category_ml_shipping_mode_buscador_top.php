<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(MlCategoryMlShippingMode::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
MlCategoryMlShippingMode::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ml_category_ml_shipping_mode.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ml_category_ml_shipping_mode.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_category.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_category.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_category.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_shipping_mode.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_shipping_mode.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_shipping_mode.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ml_category', 'ml_category.id', 'ml_category_ml_shipping_mode.ml_category_id', 'LEFT JOIN');
$criterio->addRealJoin('ml_shipping_mode', 'ml_shipping_mode.id', 'ml_category_ml_shipping_mode.ml_shipping_mode_id', 'LEFT JOIN');
    
$criterio->addTabla('ml_category_ml_shipping_mode');
$criterio->setCriterios();

