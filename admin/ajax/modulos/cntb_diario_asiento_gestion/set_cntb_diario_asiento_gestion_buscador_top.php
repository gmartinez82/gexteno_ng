<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador');
$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_cntb_ejercicio_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cntb_ejercicio_id', 0);
$cmb_filtro_cntb_tipo_asiento_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cntb_tipo_asiento_id', 0);
$cmb_filtro_cntb_tipo_origen_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cntb_tipo_origen_id', 0);
$cmb_filtro_gral_actividad_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_actividad_id', 0);
$cmb_filtro_cntb_tipo_movimiento_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cntb_tipo_movimiento_id', 0);
$cmb_filtro_cntb_cuenta_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cntb_cuenta_id', 0);



$criterio = new Criterio(CntbDiarioAsiento::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addInicioSubconsulta();
$criterio->add('', 'true', '', false, "");

if ($cmb_filtro_cntb_ejercicio_id != 0) {
    $criterio->add('cntb_ejercicio.id', $cmb_filtro_cntb_ejercicio_id, Criterio::IGUAL);
}

if ($cmb_filtro_cntb_tipo_asiento_id != 0) {
    $criterio->add('cntb_tipo_asiento.id', $cmb_filtro_cntb_tipo_asiento_id, Criterio::IGUAL);
}

if ($cmb_filtro_cntb_tipo_origen_id != 0) {
    $criterio->add('cntb_tipo_origen.id', $cmb_filtro_cntb_tipo_origen_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_actividad_id != 0) {
    $criterio->add('gral_actividad.id', $cmb_filtro_gral_actividad_id, Criterio::IGUAL);
}

if ($cmb_filtro_cntb_tipo_movimiento_id != 0) {
    $criterio->add('cntb_tipo_movimiento.id', $cmb_filtro_cntb_tipo_movimiento_id, Criterio::IGUAL);
}

if ($cmb_filtro_cntb_cuenta_id != 0) {
    $criterio->add('cntb_cuenta.id', $cmb_filtro_cntb_cuenta_id, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio->add('cntb_diario_asiento.fecha', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != "") {
    $criterio->add('cntb_diario_asiento.fecha', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}

$criterio->addFinSubconsulta();


if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();
    $criterio->add('cntb_cuenta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('cntb_diario_asiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_diario_asiento.numero', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_diario_asiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_diario_asiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_ejercicio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_ejercicio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_ejercicio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_tipo_asiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_tipo_asiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_tipo_asiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_tipo_origen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_tipo_origen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_tipo_origen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_tipo_movimiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_tipo_movimiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cntb_tipo_movimiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin('cntb_ejercicio', 'cntb_ejercicio.id', 'cntb_diario_asiento.cntb_ejercicio_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_tipo_asiento', 'cntb_tipo_asiento.id', 'cntb_diario_asiento.cntb_tipo_asiento_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_tipo_origen', 'cntb_tipo_origen.id', 'cntb_diario_asiento.cntb_tipo_origen_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'cntb_diario_asiento.gral_actividad_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_tipo_movimiento', 'cntb_tipo_movimiento.id', 'cntb_diario_asiento.cntb_tipo_movimiento_id', 'LEFT JOIN');

$criterio->addRealJoin('cntb_diario_asiento_cuenta', 'cntb_diario_asiento_cuenta.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_cuenta', 'cntb_cuenta.id', 'cntb_diario_asiento_cuenta.cntb_cuenta_id', 'LEFT JOIN');

$criterio->addTabla('cntb_diario_asiento');
//$criterio->addOrden(CntbDiarioAsiento::GEN_ATTR_NUMERO, Criterio::_ASC);
$criterio->setCriterios();
?>

