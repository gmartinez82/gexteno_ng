<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_codigo = Gral::getVars(1, 'txt_buscador_codigo', '');
$txt_buscador_numero_factura = Gral::getVars(1, 'txt_buscador_numero_factura', '');
$txt_buscador_cae = Gral::getVars(1, 'txt_buscador_cae', '');

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_gral_condicion_iva_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_condicion_iva_id', 0);
$cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0);
$cmb_filtro_vta_factura_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_factura_tipo_estado_id', 0);
$cmb_filtro_vta_tipo_factura_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_tipo_factura_id', 0);
$cmb_filtro_vta_tipo_origen_factura_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_tipo_origen_factura_id', 0);
$cmb_filtro_sin_cae = Gral::getVars(1, 'cmb_filtro_sin_cae', -1);


$cmb_filtro_vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_punto_venta_id', 0);
$cmb_filtro_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_sucursal_id', 0);

$cmb_filtro_vta_comprador_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_comprador_id', 0);
$cmb_filtro_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_vendedor_id', 0);
$cmb_filtro_vta_preventista_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_preventista_id', 0);

$cmb_filtro_gral_actividad_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_actividad_id', 0);
$cmb_filtro_gral_escenario_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_escenario_id', 0);

$criterio = new Criterio(VtaFactura::SES_CRITERIOS);

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaFactura::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();

//$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('vta_factura.fecha_emision', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('vta_factura.fecha_emision', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if (!empty($txt_buscador_codigo)) {
    $criterio->add('vta_factura.codigo', $txt_buscador_codigo, Criterio::LIKE);
}
if (!empty($txt_buscador_numero_factura)) {
    $criterio->add('vta_factura.numero_factura_completo', $txt_buscador_numero_factura, Criterio::LIKE);
}
if (!empty($txt_buscador_cae)) {
    $criterio->add('vta_factura.cae', $txt_buscador_cae, Criterio::LIKE);
}
if ($cmb_filtro_gral_condicion_iva_id != 0) {
    $criterio->add('vta_factura.gral_condicion_iva_id', $cmb_filtro_gral_condicion_iva_id, Criterio::IGUAL);
}
if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add('vta_factura.cli_cliente_id', $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_factura_tipo_estado_id != 0) {
    $criterio->add('vta_factura.vta_factura_tipo_estado_id', $cmb_filtro_vta_factura_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_tipo_factura_id != 0) {
    $criterio->add('vta_factura.vta_tipo_factura_id', $cmb_filtro_vta_tipo_factura_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_tipo_origen_factura_id != 0) {
    $criterio->add('vta_factura.vta_tipo_origen_factura_id', $cmb_filtro_vta_tipo_origen_factura_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_punto_venta_id != 0) {
    $criterio->add('vta_factura.vta_punto_venta_id', $cmb_filtro_vta_punto_venta_id, Criterio::IGUAL);
}
if ($cmb_filtro_gral_sucursal_id != 0) {
    $criterio->add('vta_factura.gral_sucursal_id', $cmb_filtro_gral_sucursal_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_comprador_id != 0) {
    $criterio->add('vta_factura.vta_comprador_id', $cmb_filtro_vta_comprador_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add('vta_factura.vta_vendedor_id', $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_preventista_id != 0) {
    $criterio->add('vta_factura.vta_preventista_id', $cmb_filtro_vta_preventista_id, Criterio::IGUAL);
}
if($cmb_filtro_gral_actividad_id != 0){
    $criterio->add('vta_factura.gral_actividad_id', $cmb_filtro_gral_actividad_id, Criterio::IGUAL);    
}
if($cmb_filtro_gral_escenario_id != 0){
    $criterio->add('vta_factura.gral_escenario_id', $cmb_filtro_gral_escenario_id, Criterio::IGUAL);    
}
if ($cmb_filtro_sin_cae == 1) {
    $criterio->add('vta_factura.cae', Criterio::VACIO, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio->addInicioSubconsulta();

    $criterio->add('vta_factura.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('vta_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_factura.numero_factura', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_factura.numero_factura_completo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_factura.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_factura.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_factura.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_factura.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_factura.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_factura.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(InsInsumo::GEN_ATTR_CLAVES, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    
    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
//$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
//$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_factura.gral_condicion_iva_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_factura.gral_tipo_personeria_id', 'LEFT JOIN');

$criterio->addTabla('vta_factura');
$criterio->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_DESC);
//$criterio->addOrden(VtaFactura::GEN_ATTR_FECHA_EMISION, Criterio::_DESC);
//$criterio->addOrden(VtaFactura::GEN_ATTR_NUMERO_FACTURA_COMPLETO, Criterio::_DESC);
$criterio->setCriterios();
?>

