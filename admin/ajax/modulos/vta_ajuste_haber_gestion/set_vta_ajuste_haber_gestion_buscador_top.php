<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_codigo = Gral::getVars(1, 'txt_buscador_codigo', '');
$txt_buscador_numero_ajuste_haber = Gral::getVars(1, 'txt_buscador_numero_ajuste_haber', '');
$txt_buscador_cae = Gral::getVars(1, 'txt_buscador_cae', '');

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_gral_condicion_iva_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_condicion_iva_id', 0);
$cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0);
$cmb_filtro_vta_ajuste_haber_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_ajuste_haber_tipo_estado_id', 0);
$cmb_filtro_vta_tipo_ajuste_haber_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_tipo_ajuste_haber_id', 0);

$cmb_filtro_vta_ajuste_haber_condicion_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_ajuste_haber_condicion_pago_id', 0);
$cmb_filtro_vta_ajuste_haber_tipo_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_ajuste_haber_tipo_pago_id', 0);

$criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('vta_ajuste_haber.fecha_emision', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('vta_ajuste_haber.fecha_emision', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if (!empty($txt_buscador_codigo)) {
    $criterio->add('vta_ajuste_haber.codigo', $txt_buscador_codigo, Criterio::LIKE);
}
if (!empty($txt_buscador_numero_ajuste_haber)) {
    $criterio->add('vta_ajuste_haber.codigo', $txt_buscador_numero_ajuste_haber, Criterio::LIKE);
}
if (!empty($txt_buscador_cae)) {
    $criterio->add('vta_ajuste_haber.cae', $txt_buscador_cae, Criterio::LIKE);
}
if ($cmb_filtro_gral_condicion_iva_id != 0) {
    $criterio->add('vta_ajuste_haber.gral_condicion_iva_id', $cmb_filtro_gral_condicion_iva_id, Criterio::IGUAL);
}
if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add('vta_ajuste_haber.cli_cliente_id', $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_ajuste_haber_tipo_estado_id != 0) {
    $criterio->add('vta_ajuste_haber.vta_ajuste_haber_tipo_estado_id', $cmb_filtro_vta_ajuste_haber_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_tipo_ajuste_haber_id != 0) {
    $criterio->add('vta_ajuste_haber.vta_tipo_ajuste_haber_id', $cmb_filtro_vta_tipo_ajuste_haber_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_ajuste_haber_condicion_pago_id != 0) {
    $criterio->add('vta_ajuste_haber.vta_ajuste_haber_condicion_pago_id', $cmb_filtro_vta_ajuste_haber_condicion_pago_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_ajuste_haber_tipo_pago_id != 0) {
    $criterio->add('vta_ajuste_haber.vta_ajuste_haber_tipo_pago_id', $cmb_filtro_vta_ajuste_haber_tipo_pago_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio->addInicioSubconsulta();

    $criterio->add('vta_ajuste_haber.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('vta_ajuste_haber.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_haber.numero_ajuste_haber', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_haber.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_haber.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_haber.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_haber.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_haber.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_haber.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_haber.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_haber.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->addFinSubconsulta();
}

//$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_ajuste_haber.cli_cliente_id', 'LEFT JOIN');
//$criterio->addRealJoin('vta_ajuste_haber_tipo_estado', 'vta_ajuste_haber_tipo_estado.id', 'vta_ajuste_haber.vta_ajuste_haber_tipo_estado_id', 'LEFT JOIN');
//$criterio->addRealJoin('vta_tipo_ajuste_haber', 'vta_tipo_ajuste_haber.id', 'vta_ajuste_haber.vta_tipo_ajuste_haber_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_ajuste_haber.gral_condicion_iva_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_ajuste_haber.gral_tipo_personeria_id', 'LEFT JOIN');

$criterio->addTabla('vta_ajuste_haber');
$criterio->setCriterios();
?>

