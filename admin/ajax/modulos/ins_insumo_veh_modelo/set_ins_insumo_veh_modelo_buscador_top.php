<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsInsumoVehModelo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
InsInsumoVehModelo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ins_insumo_veh_modelo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_modelo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_modelo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_modelo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_veh_modelo.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('veh_modelo', 'veh_modelo.id', 'ins_insumo_veh_modelo.veh_modelo_id', 'LEFT JOIN');
    
$criterio->addTabla('ins_insumo_veh_modelo');
$criterio->setCriterios();

