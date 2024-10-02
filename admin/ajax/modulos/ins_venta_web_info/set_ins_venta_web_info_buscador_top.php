<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsVentaWebInfo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
InsVentaWebInfo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ins_venta_web_info.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_venta_web_info.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_web_info.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_web_info.badge', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_web_info.descripcion_breve', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_web_info.descripcion_ext', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_web_info.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_venta_web_info.ins_insumo_id', 'LEFT JOIN');
    
$criterio->addTabla('ins_venta_web_info');
$criterio->setCriterios();

