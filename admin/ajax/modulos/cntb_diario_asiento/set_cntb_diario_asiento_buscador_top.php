<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CntbDiarioAsiento::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CntbDiarioAsiento::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cntb_diario_asiento.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cntb_diario_asiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.numero', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_ejercicio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_ejercicio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_ejercicio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_asiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_asiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_asiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_origen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_origen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_origen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_movimiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_movimiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_movimiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_actividad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_actividad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_actividad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cntb_ejercicio', 'cntb_ejercicio.id', 'cntb_diario_asiento.cntb_ejercicio_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento.cntb_periodo_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_tipo_asiento', 'cntb_tipo_asiento.id', 'cntb_diario_asiento.cntb_tipo_asiento_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_tipo_origen', 'cntb_tipo_origen.id', 'cntb_diario_asiento.cntb_tipo_origen_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_tipo_movimiento', 'cntb_tipo_movimiento.id', 'cntb_diario_asiento.cntb_tipo_movimiento_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'cntb_diario_asiento.gral_actividad_id', 'LEFT JOIN');
    
$criterio->addTabla('cntb_diario_asiento');
$criterio->setCriterios();

