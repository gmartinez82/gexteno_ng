<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_codigo = Gral::getVars(1, 'txt_buscador_codigo', '');
$txt_buscador_numero_nota_debito = Gral::getVars(1, 'txt_buscador_numero_nota_debito', '');
$txt_buscador_cae = Gral::getVars(1, 'txt_buscador_cae', '');

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0);
$cmb_filtro_gral_condicion_iva_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_condicion_iva_id', 0);
$cmb_filtro_vta_nota_debito_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_nota_debito_tipo_estado_id', 0);
$cmb_filtro_vta_tipo_nota_debito_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_tipo_nota_debito_id', 0);
$cmb_filtro_vta_tipo_origen_nota_debito_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_tipo_origen_nota_debito_id', 0);

$criterio = new Criterio(VtaNotaDebito::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('vta_nota_debito.fecha_emision', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('vta_nota_debito.fecha_emision', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if (!empty($txt_buscador_codigo)) {
    $criterio->add('vta_nota_debito.codigo', $txt_buscador_codigo, Criterio::LIKE);
}
if (!empty($txt_buscador_numero_nota_debito)) {
    $criterio->add('vta_nota_debito.numero_nota_debito_completo', $txt_buscador_numero_nota_debito, Criterio::LIKE);
}
if (!empty($txt_buscador_cae)) {
    $criterio->add('vta_nota_debito.cae', $txt_buscador_cae, Criterio::LIKE);
}
if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add('vta_nota_debito.cli_cliente_id', $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}
if ($cmb_filtro_gral_condicion_iva_id != 0) {
    $criterio->add('vta_nota_debito.gral_condicion_iva_id', $cmb_filtro_gral_condicion_iva_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_nota_debito_tipo_estado_id != 0) {
    $criterio->add('vta_nota_debito.vta_nota_debito_tipo_estado_id', $cmb_filtro_vta_nota_debito_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_tipo_nota_debito_id != 0) {
    $criterio->add('vta_nota_debito.vta_tipo_nota_debito_id', $cmb_filtro_vta_tipo_nota_debito_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_tipo_origen_nota_debito_id != 0) {
    $criterio->add('vta_nota_debito.vta_tipo_origen_nota_debito_id', $cmb_filtro_vta_tipo_origen_nota_debito_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio->addInicioSubconsulta();
    
    $criterio->add('vta_nota_debito.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('vta_nota_debito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_nota_debito.numero_nota_debito_completo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_nota_debito.cae', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_nota_debito.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_nota_debito.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_nota_debito.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_nota_debito.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_nota_debito.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_nota_debito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_nota_debito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    
    $criterio->addFinSubconsulta();
}

//$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_nota_debito.cli_cliente_id', 'LEFT JOIN');
//$criterio->addRealJoin('vta_tipo_nota_debito', 'vta_tipo_nota_debito.id', 'vta_nota_debito.vta_tipo_nota_debito_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_nota_debito.gral_condicion_iva_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_nota_debito.gral_tipo_personeria_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_nota_debito.gral_empresa_id', 'LEFT JOIN');
$criterio->addTabla('vta_nota_debito');
$criterio->addOrden(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, Criterio::_DESC);
$criterio->addOrden(VtaNotaDebito::GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO, Criterio::_DESC);
$criterio->setCriterios();
?>

