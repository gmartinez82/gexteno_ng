<?php
include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', "");
$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_sucursal_id', 0);
$cmb_filtro_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_vendedor_id', 0);
$cmb_filtro_vta_orden_venta_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_orden_venta_tipo_estado_id', 0);
$cmb_filtro_vta_orden_venta_tipo_estado_remision_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_orden_venta_tipo_estado_remision_id', 0);
$cmb_filtro_vta_orden_venta_tipo_estado_remision_activa = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_orden_venta_tipo_estado_remision_activa', -1);
$cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id', 0);
$cmb_filtro_vta_orden_venta_tipo_estado_facturacion_activa = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_orden_venta_tipo_estado_facturacion_activa', -1);

$cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0);
$cmb_filtro_ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_ins_tipo_lista_precio_id', 0);
$cmb_filtro_gral_actividad_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_actividad_id', 0);
$cmb_filtro_gral_escenario_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_escenario_id', 0);

$cmb_filtro_vta_presupuesto_tipo_despacho_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_tipo_despacho_id', 0);
$cmb_filtro_vta_presupuesto_tipo_venta_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_tipo_venta_id', 0);
$cmb_filtro_vta_presupuesto_tipo_origen_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_tipo_origen_id', 0);
$cmb_filtro_vta_presupuesto_tipo_emision_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_tipo_emision_id', 0);

$cmb_filtro_geo_provincia_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_geo_provincia_id', 0);
$cmb_filtro_geo_localidad_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_geo_localidad_id', 0);
$cmb_filtro_gral_ruta_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_ruta_id', 0);
$cmb_filtro_gral_sucursal_retiro = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_sucursal_retiro', 0);

$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);


$criterio->addTrueInicialEnWhere();
VtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
$criterio->addTrueInicialEnWhere();

//$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('vta_orden_venta.creado', Gral::getFechaToDB($txt_filtro_desde).' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('vta_orden_venta.creado', Gral::getFechaToDB($txt_filtro_hasta).' 23:59:59', Criterio::MENORIGUAL);
}
if ($cmb_filtro_gral_sucursal_id != 0) {
    $criterio->add('vta_presupuesto.gral_sucursal_id', $cmb_filtro_gral_sucursal_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add('vta_presupuesto.vta_vendedor_id', $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_presupuesto_tipo_despacho_id != 0) {
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_despacho_id', $cmb_filtro_vta_presupuesto_tipo_despacho_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_presupuesto_tipo_venta_id != 0) {
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_venta_id', $cmb_filtro_vta_presupuesto_tipo_venta_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_presupuesto_tipo_origen_id != 0) {
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_origen_id', $cmb_filtro_vta_presupuesto_tipo_origen_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_presupuesto_tipo_emision_id != 0) {
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_emision_id', $cmb_filtro_vta_presupuesto_tipo_emision_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_orden_venta_tipo_estado_id != 0) {
    $criterio->add('vta_orden_venta.vta_orden_venta_tipo_estado_id', $cmb_filtro_vta_orden_venta_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_orden_venta_tipo_estado_remision_id != 0) {
    $criterio->add('vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', $cmb_filtro_vta_orden_venta_tipo_estado_remision_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_orden_venta_tipo_estado_remision_activa != -1) {
    $criterio->add('vta_orden_venta_tipo_estado.activo', 1, Criterio::IGUAL);
    $criterio->add('vta_orden_venta_tipo_estado_remision.activo', $cmb_filtro_vta_orden_venta_tipo_estado_remision_activa, Criterio::IGUAL);
}
if ($cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id != 0) {
    $criterio->add('vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', $cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_orden_venta_tipo_estado_facturacion_activa != -1) {
    $criterio->add('vta_orden_venta_tipo_estado.activo', 1, Criterio::IGUAL);
    $criterio->add('vta_orden_venta_tipo_estado_facturacion.activo', $cmb_filtro_vta_orden_venta_tipo_estado_facturacion_activa, Criterio::IGUAL);
}
if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}
if ($cmb_filtro_ins_tipo_lista_precio_id != 0) {
    $criterio->add('vta_orden_venta.ins_tipo_lista_precio_id', $cmb_filtro_ins_tipo_lista_precio_id, Criterio::IGUAL);
}
if($cmb_filtro_gral_actividad_id != 0){
    $criterio->add('vta_presupuesto.gral_actividad_id', $cmb_filtro_gral_actividad_id, Criterio::IGUAL);    
}
if($cmb_filtro_gral_escenario_id != 0){
    $criterio->add('vta_presupuesto.gral_escenario_id', $cmb_filtro_gral_escenario_id, Criterio::IGUAL);    
}

if ($cmb_filtro_geo_provincia_id != 0) {
    $criterio->add(GeoProvincia::GEN_ATTR_ID, $cmb_filtro_geo_provincia_id, Criterio::IGUAL);
}
if ($cmb_filtro_geo_localidad_id != 0) {
    $criterio->add(GeoLocalidad::GEN_ATTR_ID, $cmb_filtro_geo_localidad_id, Criterio::IGUAL);
}
if ($cmb_filtro_gral_ruta_id != 0) {
    $criterio->add(GralRuta::GEN_ATTR_ID, $cmb_filtro_gral_ruta_id, Criterio::IGUAL);
}
if ($cmb_filtro_gral_sucursal_retiro != 0) {
    $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_RETIRO, $cmb_filtro_gral_sucursal_retiro, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();
    $criterio->add('vta_orden_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add(VtaPresupuesto::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->add(VtaPresupuesto::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.codigo_interno', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.claves', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->addFinSubconsulta();
}

$criterio->addTabla(VtaOrdenVenta::GEN_TABLA);

//$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'vta_orden_venta.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
//$criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_orden_venta.ins_tipo_lista_precio_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');

$criterio->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoProvincia::GEN_TABLA, GeoProvincia::GEN_ATTR_ID, GeoLocalidad::GEN_ATTR_GEO_PROVINCIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralRuta::GEN_TABLA, GralRuta::GEN_ATTR_ID, GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, 'LEFT JOIN');


$criterio->setCriterios();
?>

