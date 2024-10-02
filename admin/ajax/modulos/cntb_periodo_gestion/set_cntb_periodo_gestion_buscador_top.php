<?php
include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CntbPeriodo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cntb_periodo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cntb_periodo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.anio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.fecha_inicio', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.fecha_fin', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_ejercicio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_ejercicio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_ejercicio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cntb_ejercicio', 'cntb_ejercicio.id', 'cntb_periodo.cntb_ejercicio_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'cntb_periodo.gral_mes_id', 'LEFT JOIN');
    
$criterio->addTabla('cntb_periodo');
$criterio->setCriterios();

