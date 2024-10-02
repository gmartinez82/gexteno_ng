<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PerMovMovimiento::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PerMovMovimiento::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('per_mov_movimiento.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('per_mov_movimiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_movimiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_movimiento.fechahora', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_movimiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_movimiento.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_tipo_movimiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_tipo_movimiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_tipo_movimiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_sector.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_sector.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_sector.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ctrl_equipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'per_mov_movimiento.gral_empresa_id', 'LEFT JOIN');
$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_mov_movimiento.per_persona_id', 'LEFT JOIN');
$criterio->addRealJoin('per_mov_tipo_movimiento', 'per_mov_tipo_movimiento.id', 'per_mov_movimiento.per_mov_tipo_movimiento_id', 'LEFT JOIN');
$criterio->addRealJoin('ctrl_sector', 'ctrl_sector.id', 'per_mov_movimiento.ctrl_sector_id', 'LEFT JOIN');
$criterio->addRealJoin('ctrl_equipo', 'ctrl_equipo.id', 'per_mov_movimiento.ctrl_equipo_id', 'LEFT JOIN');
$criterio->addRealJoin('per_mov_tipo_estado', 'per_mov_tipo_estado.id', 'per_mov_movimiento.per_mov_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('per_mov_movimiento');
$criterio->setCriterios();

