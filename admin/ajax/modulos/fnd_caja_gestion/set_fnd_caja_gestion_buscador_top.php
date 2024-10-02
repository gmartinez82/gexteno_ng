<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador');
$cmb_filtro_fnd_cajero_id = Gral::getVars(1, 'cmb_filtro_fnd_cajero_id', 0, GRal::TIPO_INTEGER);
$cmb_filtro_gral_caja_id = Gral::getVars(1, 'cmb_filtro_gral_caja_id', 0, GRal::TIPO_INTEGER);
$cmb_filtro_fnd_caja_tipo_estado_id = Gral::getVars(1, 'cmb_filtro_fnd_caja_tipo_estado_id', 0, GRal::TIPO_INTEGER);
$cmb_filtro_fnd_caja_tipo_ingreso_id = Gral::getVars(1, 'cmb_filtro_fnd_caja_tipo_ingreso_id', 0, GRal::TIPO_INTEGER);
$cmb_filtro_fnd_caja_tipo_egreso_id = Gral::getVars(1, 'cmb_filtro_fnd_caja_tipo_egreso_id', 0, GRal::TIPO_INTEGER);

// se inicializa cajero
$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();

$criterio = new Criterio(FndCaja::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addTrueInicialEnWhere();

if (!$user->getAbsoluto() && !$user->esUsuarioCajaTesorero() && !$user->esUsuarioCajaAuditor()) {
    $criterio->add(FndCaja::GEN_ATTR_FND_CAJERO_ID, $fnd_cajero->getId(), Criterio::IGUAL);
}

$criterio->addInicioSubconsulta();
$criterio->addTrueInicialEnWhere();

if ($cmb_filtro_fnd_cajero_id != 0) {
    $criterio->add('fnd_cajero.id', $cmb_filtro_fnd_cajero_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_caja_id != 0) {
    $criterio->add('gral_caja.id', $cmb_filtro_gral_caja_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_caja_tipo_estado_id != 0) {
    $criterio->add('fnd_caja_tipo_estado.id', $cmb_filtro_fnd_caja_tipo_estado_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_caja_tipo_ingreso_id != 0) {
    $criterio->add('fnd_caja_tipo_ingreso.id', $cmb_filtro_fnd_caja_tipo_ingreso_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_caja_tipo_egreso_id != 0) {
    $criterio->add('fnd_caja_tipo_egreso.id', $cmb_filtro_fnd_caja_tipo_egreso_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();
    $criterio->add('fnd_caja.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('fnd_caja.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('fnd_caja.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('fnd_cajero.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('fnd_cajero.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('fnd_cajero.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('fnd_caja_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('fnd_caja_ingreso.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('fnd_caja_ingreso.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('fnd_caja_egreso.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('fnd_caja_egreso.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin('gral_caja', 'gral_caja.id', 'fnd_caja.gral_caja_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_cajero', 'fnd_cajero.id', 'fnd_caja.fnd_cajero_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_caja_tipo_estado', 'fnd_caja_tipo_estado.id', 'fnd_caja.fnd_caja_tipo_estado_id', 'LEFT JOIN');

$criterio->addRealJoin(FndCajaEgreso::GEN_TABLA, FndCajaEgreso::GEN_ATTR_FND_CAJA_ID, FndCaja::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndCajaTipoEgreso::GEN_TABLA, FndCajaTipoEgreso::GEN_ATTR_ID, FndCajaEgreso::GEN_ATTR_FND_CAJA_TIPO_EGRESO_ID, 'LEFT JOIN');

$criterio->addRealJoin(FndCajaIngreso::GEN_TABLA, FndCajaIngreso::GEN_ATTR_FND_CAJA_ID, FndCaja::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndCajaTipoIngreso::GEN_TABLA, FndCajaTipoIngreso::GEN_ATTR_ID, FndCajaIngreso::GEN_ATTR_FND_CAJA_TIPO_INGRESO_ID, 'LEFT JOIN');

$criterio->addTabla('fnd_caja');
$criterio->setCriterios();
?>

