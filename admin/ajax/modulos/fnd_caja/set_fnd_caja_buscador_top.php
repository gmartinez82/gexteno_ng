<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(FndCaja::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
FndCaja::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('fnd_caja.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('fnd_caja.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.fecha_apertura', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.fecha_cierre', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.fecha_rendicion', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.importe_saldo_inicial_esperado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.importe_saldo_inicial_real', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.importe_saldo_inicial_diferencia', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.importe_saldo_final', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_cajero.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_cajero.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_cajero.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_cajero.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_cajero.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('fnd_cajero', 'fnd_cajero.id', 'fnd_caja.fnd_cajero_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_caja', 'gral_caja.id', 'fnd_caja.gral_caja_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_caja_tipo_estado', 'fnd_caja_tipo_estado.id', 'fnd_caja.fnd_caja_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('fnd_caja');
$criterio->setCriterios();

