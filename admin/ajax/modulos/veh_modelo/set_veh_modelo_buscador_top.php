<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VehModelo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VehModelo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('veh_modelo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('veh_modelo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_modelo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_modelo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_marca.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_marca.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_marca.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('veh_marca', 'veh_marca.id', 'veh_modelo.veh_marca_id', 'LEFT JOIN');
    
$criterio->addTabla('veh_modelo');
$criterio->setCriterios();

