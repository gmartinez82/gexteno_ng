<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(FndCajaMovimientoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
FndCajaMovimientoEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('fnd_caja_movimiento_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('fnd_caja_movimiento_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_estado.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_estado.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('fnd_caja_movimiento', 'fnd_caja_movimiento.id', 'fnd_caja_movimiento_estado.fnd_caja_movimiento_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_caja_movimiento_tipo_estado', 'fnd_caja_movimiento_tipo_estado.id', 'fnd_caja_movimiento_estado.fnd_caja_movimiento_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('fnd_caja_movimiento_estado');
$criterio->setCriterios();

