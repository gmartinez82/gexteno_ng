<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(Gral::VARS_POST, 'txt_buscador', "", Gral::TIPO_STRING);
$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "", Gral::TIPO_STRING);
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "", Gral::TIPO_STRING);

$cmb_filtro_vta_remito_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_remito_tipo_estado_id', 0, Gral::TIPO_INTEGER);
$cmb_filtro_pan_panol_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pan_panol_id', 0, Gral::TIPO_INTEGER);
$cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0, Gral::TIPO_INTEGER);

$cmb_filtro_vta_tipo_remito_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_tipo_remito_id', 0, Gral::TIPO_INTEGER);
$cmb_filtro_vta_remito_tipo_despacho_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_remito_tipo_despacho_id', 0);
$cmb_filtro_gral_sucursal_retiro = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_sucursal_retiro', 0);
$cmb_filtro_gral_ruta_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_ruta_cliente_id', 0, Gral::TIPO_INTEGER);
$cmb_filtro_gral_ruta_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_ruta_id', 0, Gral::TIPO_INTEGER);
$cmb_filtro_vta_hoja_ruta_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_hoja_ruta_id', 0, Gral::TIPO_INTEGER);
$cmb_filtro_con_hoja_ruta = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_con_hoja_ruta', -1);

$criterio = new Criterio(VtaRemito::SES_CRITERIOS);

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);


$criterio->addInicioSubconsulta();
$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('vta_remito.fecha', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != "") {
    $criterio->add('vta_remito.fecha', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}

if ($cmb_filtro_vta_remito_tipo_estado_id != 0) {
    $criterio->add('vta_remito.vta_remito_tipo_estado_id', $cmb_filtro_vta_remito_tipo_estado_id, Criterio::IGUAL);
}
if($cmb_filtro_pan_panol_id != 0){
    $criterio->add('vta_remito.pan_panol_id', $cmb_filtro_pan_panol_id, Criterio::IGUAL);    
}
if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add('vta_remito.cli_cliente_id', $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add('vta_remito.vta_vendedor_id', $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_tipo_remito_id != 0) {
    $criterio->add(VtaRemito::GEN_ATTR_VTA_TIPO_REMITO_ID, $cmb_filtro_vta_tipo_remito_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_remito_tipo_despacho_id != 0) {
    $criterio->add('vta_remito.vta_remito_tipo_despacho_id', $cmb_filtro_vta_remito_tipo_despacho_id, Criterio::IGUAL);
}
if ($cmb_filtro_gral_sucursal_retiro != 0) {
    $criterio->add('vta_remito.gral_sucursal_retiro', $cmb_filtro_gral_sucursal_retiro, Criterio::IGUAL);
}

if ($cmb_filtro_gral_ruta_id != 0) {
    $criterio->add(GralRuta::GEN_ATTR_ID, $cmb_filtro_gral_ruta_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_hoja_ruta_id != 0) {
    $criterio->add(VtaHojaRuta::GEN_ATTR_ID, $cmb_filtro_vta_hoja_ruta_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_ruta_cliente_id != 0) {
    $criterio->add(GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, $cmb_filtro_gral_ruta_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_con_hoja_ruta == 0) {
    $criterio->add(VtaHojaRutaVtaRemito::GEN_ATTR_VTA_REMITO_ID, ' and true', Criterio::IS_NULL);
} elseif ($cmb_filtro_con_hoja_ruta == 1) {
    $criterio->add(VtaHojaRutaVtaRemito::GEN_ATTR_VTA_REMITO_ID, ' and true', Criterio::IS_NOT_NULL);
}

$criterio->addFinSubconsulta();

if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();
    $criterio->add('vta_remito.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('vta_remito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.codigo_interno', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaRemitoTipoEstado::GEN_TABLA, VtaRemitoTipoEstado::GEN_ATTR_ID, VtaRemito::GEN_ATTR_VTA_REMITO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaRemitoVtaOrdenVenta::GEN_TABLA, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_REMITO_ID, VtaRemito::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_ID, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');

$criterio->addRealJoin(VtaHojaRutaVtaRemito::GEN_TABLA, VtaHojaRutaVtaRemito::GEN_ATTR_VTA_REMITO_ID, VtaRemito::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaHojaRuta::GEN_TABLA, VtaHojaRuta::GEN_ATTR_ID, VtaHojaRutaVtaRemito::GEN_ATTR_VTA_HOJA_RUTA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralRuta::GEN_TABLA, GralRuta::GEN_ATTR_ID, VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID, 'LEFT JOIN');

$criterio->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_ID, VtaRemito::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
//$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID, 'LEFT JOIN');

$criterio->addTabla(VtaRemito::GEN_TABLA);
$criterio->addOrden(VtaRemito::GEN_ATTR_FECHA, Criterio::_DESC);
$criterio->addOrden(VtaRemito::GEN_ATTR_NUMERO_REMITO_COMPLETO, Criterio::_DESC);
$criterio->setCriterios();
?>
