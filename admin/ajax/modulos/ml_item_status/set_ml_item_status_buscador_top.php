<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(MlItemStatus::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
MlItemStatus::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ml_item_status.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ml_item_status.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_item_status.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_item_status.codigo_ml', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_item_status.activo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_item_status.inactivo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_item_status.requiere_atencion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_item_status.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('ml_item_status');
$criterio->setCriterios();

