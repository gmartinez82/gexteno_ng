<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CtrlEquipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
CtrlEquipoEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('ctrl_equipo_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ctrl_equipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo_estado.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo_estado.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo_estado.creado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ctrl_equipo', 'ctrl_equipo.id', 'ctrl_equipo_estado.ctrl_equipo_id', 'LEFT JOIN');
$criterio->addRealJoin('ctrl_equipo_tipo_estado', 'ctrl_equipo_tipo_estado.id', 'ctrl_equipo_estado.ctrl_equipo_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('ctrl_equipo_estado');
$criterio->setCriterios();

