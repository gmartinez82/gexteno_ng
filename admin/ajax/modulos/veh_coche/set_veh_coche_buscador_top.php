<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VehCoche::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VehCoche::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('veh_coche.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('veh_coche.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche.version', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche.patente', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche.anio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_modelo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_modelo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_modelo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('veh_modelo', 'veh_modelo.id', 'veh_coche.veh_modelo_id', 'LEFT JOIN');
    
$criterio->addTabla('veh_coche');
$criterio->setCriterios();

