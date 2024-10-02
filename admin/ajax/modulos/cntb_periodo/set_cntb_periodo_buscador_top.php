<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CntbPeriodo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CntbPeriodo::setAplicarFiltrosDeAlcance($criterio);

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
$criterio->add('gral_empresa.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_ejercicio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_ejercicio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_ejercicio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'cntb_periodo.gral_empresa_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_ejercicio', 'cntb_ejercicio.id', 'cntb_periodo.cntb_ejercicio_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'cntb_periodo.gral_mes_id', 'LEFT JOIN');
    
$criterio->addTabla('cntb_periodo');
$criterio->setCriterios();

