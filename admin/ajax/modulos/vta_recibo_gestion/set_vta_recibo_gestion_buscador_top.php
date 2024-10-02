<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_codigo = Gral::getVars(1, 'txt_buscador_codigo', '');
$txt_buscador_numero_recibo = Gral::getVars(1, 'txt_buscador_numero_recibo', '');
$txt_buscador_cae = Gral::getVars(1, 'txt_buscador_cae', '');

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_gral_condicion_iva_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_condicion_iva_id', 0);
$cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0);
$cmb_filtro_vta_recibo_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_recibo_tipo_estado_id', 0);
$cmb_filtro_vta_tipo_recibo_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_tipo_recibo_id', 0);
$cmb_filtro_vta_tipo_origen_recibo_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_tipo_origen_recibo_id', 0);

$cmb_filtro_vta_recibo_condicion_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_recibo_condicion_pago_id', 0);
$cmb_filtro_vta_recibo_tipo_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_recibo_tipo_pago_id', 0);

$criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('vta_recibo.fecha_emision', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('vta_recibo.fecha_emision', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if (!empty($txt_buscador_codigo)) {
    $criterio->add('vta_recibo.codigo', $txt_buscador_codigo, Criterio::LIKE);
}
if (!empty($txt_buscador_numero_recibo)) {
    $criterio->add('vta_recibo.codigo', $txt_buscador_numero_recibo, Criterio::LIKE);
}
if (!empty($txt_buscador_cae)) {
    $criterio->add('vta_recibo.cae', $txt_buscador_cae, Criterio::LIKE);
}
if ($cmb_filtro_gral_condicion_iva_id != 0) {
    $criterio->add('vta_recibo.gral_condicion_iva_id', $cmb_filtro_gral_condicion_iva_id, Criterio::IGUAL);
}
if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add('vta_recibo.cli_cliente_id', $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_recibo_tipo_estado_id != 0) {
    $criterio->add('vta_recibo.vta_recibo_tipo_estado_id', $cmb_filtro_vta_recibo_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_tipo_recibo_id != 0) {
    $criterio->add('vta_recibo.vta_tipo_recibo_id', $cmb_filtro_vta_tipo_recibo_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_tipo_origen_recibo_id != 0) {
    $criterio->add('vta_recibo.vta_tipo_origen_recibo_id', $cmb_filtro_vta_tipo_origen_recibo_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_recibo_condicion_pago_id != 0) {
    $criterio->add('vta_recibo.vta_recibo_condicion_pago_id', $cmb_filtro_vta_recibo_condicion_pago_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_recibo_tipo_pago_id != 0) {
    $criterio->add('vta_recibo.vta_recibo_tipo_pago_id', $cmb_filtro_vta_recibo_tipo_pago_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio->addInicioSubconsulta();

    $criterio->add('vta_recibo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('vta_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_recibo.numero_recibo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_recibo.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_recibo.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_recibo.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_recibo.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_recibo.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_recibo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->addFinSubconsulta();
}

//$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_recibo.cli_cliente_id', 'LEFT JOIN');
//$criterio->addRealJoin('vta_recibo_tipo_estado', 'vta_recibo_tipo_estado.id', 'vta_recibo.vta_recibo_tipo_estado_id', 'LEFT JOIN');
//$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'vta_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_recibo.gral_condicion_iva_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_recibo.gral_tipo_personeria_id', 'LEFT JOIN');

$criterio->addTabla('vta_recibo');
$criterio->setCriterios();
?>

