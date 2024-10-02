<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_codigo = Gral::getVars(1, 'txt_buscador_codigo', '');
$txt_buscador_numero_ajuste_debe = Gral::getVars(1, 'txt_buscador_numero_ajuste_debe', '');
$txt_buscador_cae = Gral::getVars(1, 'txt_buscador_cae', '');

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_gral_condicion_iva_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_condicion_iva_id', 0);
$cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0);
$cmb_filtro_vta_ajuste_debe_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_ajuste_debe_tipo_estado_id', 0);
$cmb_filtro_vta_tipo_ajuste_debe_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_tipo_ajuste_debe_id', 0);

$cmb_filtro_vta_comprador_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_comprador_id', 0);
$cmb_filtro_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_vendedor_id', 0);
$cmb_filtro_vta_preventista_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_preventista_id', 0);

$cmb_filtro_gral_actividad_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_actividad_id', 0);
$cmb_filtro_gral_escenario_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_escenario_id', 0);

$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('vta_ajuste_debe.fecha_emision', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('vta_ajuste_debe.fecha_emision', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if (!empty($txt_buscador_codigo)) {
    $criterio->add('vta_ajuste_debe.codigo', $txt_buscador_codigo, Criterio::LIKE);
}
if (!empty($txt_buscador_numero_factura)) {
    $criterio->add('vta_ajuste_debe.numero_factura_completo', $txt_buscador_numero_factura, Criterio::LIKE);
}
if (!empty($txt_buscador_cae)) {
    $criterio->add('vta_ajuste_debe.cae', $txt_buscador_cae, Criterio::LIKE);
}
if ($cmb_filtro_gral_condicion_iva_id != 0) {
    $criterio->add('vta_ajuste_debe.gral_condicion_iva_id', $cmb_filtro_gral_condicion_iva_id, Criterio::IGUAL);
}
if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add('vta_ajuste_debe.cli_cliente_id', $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_ajuste_debe_tipo_estado_id != 0) {
    $criterio->add('vta_ajuste_debe.vta_ajuste_debe_tipo_estado_id', $cmb_filtro_vta_ajuste_debe_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_tipo_ajuste_debe_id != 0) {
    $criterio->add('vta_ajuste_debe.vta_tipo_ajuste_debe_id', $cmb_filtro_vta_tipo_ajuste_debe_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_comprador_id != 0) {
    $criterio->add('vta_ajuste_debe.vta_comprador_id', $cmb_filtro_vta_comprador_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add('vta_ajuste_debe.vta_vendedor_id', $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_preventista_id != 0) {
    $criterio->add('vta_ajuste_debe.vta_preventista_id', $cmb_filtro_vta_preventista_id, Criterio::IGUAL);
}
if($cmb_filtro_gral_actividad_id != 0){
    $criterio->add('vta_ajuste_debe.gral_actividad_id', $cmb_filtro_gral_actividad_id, Criterio::IGUAL);    
}
if($cmb_filtro_gral_escenario_id != 0){
    $criterio->add('vta_ajuste_debe.gral_escenario_id', $cmb_filtro_gral_escenario_id, Criterio::IGUAL);    
}

$criterio->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio->addInicioSubconsulta();

    $criterio->add('vta_ajuste_debe.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('vta_ajuste_debe.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_debe.numero_ajuste_debe', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_debe.numero_ajuste_debe_completo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_debe.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_debe.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_debe.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_debe.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_debe.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_debe.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_debe.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_ajuste_debe.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(InsInsumo::GEN_ATTR_CLAVES, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    
    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
//$criterio->addRealJoin('vta_ajuste_debe_tipo_estado', 'vta_ajuste_debe_tipo_estado.id', 'vta_ajuste_debe.vta_ajuste_debe_tipo_estado_id', 'LEFT JOIN');
//$criterio->addRealJoin('vta_tipo_ajuste_debe', 'vta_tipo_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_ajuste_debe_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_ajuste_debe.gral_condicion_iva_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_ajuste_debe.gral_tipo_personeria_id', 'LEFT JOIN');

$criterio->addTabla('vta_ajuste_debe');
$criterio->setCriterios();
?>

