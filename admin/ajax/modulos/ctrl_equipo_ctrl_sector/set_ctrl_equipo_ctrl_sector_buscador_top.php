<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CtrlEquipoCtrlSector::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
CtrlEquipoCtrlSector::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('ctrl_equipo_ctrl_sector.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ctrl_equipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_sector.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_sector.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_sector.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ctrl_equipo', 'ctrl_equipo.id', 'ctrl_equipo_ctrl_sector.ctrl_equipo_id', 'LEFT JOIN');
$criterio->addRealJoin('ctrl_sector', 'ctrl_sector.id', 'ctrl_equipo_ctrl_sector.ctrl_sector_id', 'LEFT JOIN');
    
$criterio->addTabla('ctrl_equipo_ctrl_sector');
$criterio->setCriterios();

