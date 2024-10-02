<?php

include_once '_autoload.php';
include_once Gral::getPathAbs()."admin/control/init.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

$txt_buscador = Gral::getVars(Gral::VARS_POST, 'txt_buscador', "");
$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_vta_presupuesto_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_tipo_estado_id', 0);
$cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0);
$cmb_filtro_ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_ins_tipo_lista_precio_id', 0);
$cmb_filtro_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_sucursal_id', 0);
$cmb_filtro_gral_sucursal_retiro = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_sucursal_retiro', 0);
$cmb_filtro_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_vendedor_id', 0);
$cmb_filtro_destacado = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_destacado', -1);

$cmb_filtro_vta_presupuesto_conflicto = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_conflicto', -1);
$cmb_filtro_vta_presupuesto_activo = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_activo', -1);
$cmb_filtro_vta_presupuesto_tipo_despacho_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_tipo_despacho_id', 0);
$cmb_filtro_vta_presupuesto_tipo_venta_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_tipo_venta_id', 0);
$cmb_filtro_vta_presupuesto_tipo_origen_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_tipo_origen_id', 0);
$cmb_filtro_vta_presupuesto_tipo_emision_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_tipo_emision_id', 0);
$cmb_filtro_gral_actividad_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_actividad_id', 0);
$cmb_filtro_gral_escenario_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_escenario_id', 0);


$criterio = new Criterio(VtaPresupuesto::SES_CRITERIOS);

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaPresupuesto::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();

//$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('vta_presupuesto.fecha', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('vta_presupuesto.fecha', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if ($cmb_filtro_vta_presupuesto_tipo_estado_id != 0) {
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_estado_id', $cmb_filtro_vta_presupuesto_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add('vta_presupuesto.cli_cliente_id', $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}
if ($cmb_filtro_ins_tipo_lista_precio_id != 0) {
    $criterio->add('vta_presupuesto.ins_tipo_lista_precio_id', $cmb_filtro_ins_tipo_lista_precio_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add('vta_presupuesto.vta_vendedor_id', $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_gral_sucursal_id != 0) {
    $criterio->add('vta_presupuesto.gral_sucursal_id', $cmb_filtro_gral_sucursal_id, Criterio::IGUAL);
}
if ($cmb_filtro_destacado != -1) {
    $criterio->add('vta_presupuesto.destacado', $cmb_filtro_destacado, Criterio::IGUAL);
}
if ($cmb_filtro_vta_presupuesto_conflicto != -1) {
    $criterio->add('vta_presupuesto.conflicto', $cmb_filtro_vta_presupuesto_conflicto, Criterio::IGUAL);
}
if ($cmb_filtro_vta_presupuesto_activo != -1) {
    $criterio->add('vta_presupuesto_tipo_estado.activo', $cmb_filtro_vta_presupuesto_activo, Criterio::IGUAL);
}
if ($cmb_filtro_vta_presupuesto_tipo_origen_id != 0) {
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_origen_id', $cmb_filtro_vta_presupuesto_tipo_origen_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_presupuesto_tipo_despacho_id != 0) {
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_despacho_id', $cmb_filtro_vta_presupuesto_tipo_despacho_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_presupuesto_tipo_venta_id != 0) {
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_venta_id', $cmb_filtro_vta_presupuesto_tipo_venta_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_presupuesto_tipo_emision_id != 0) {
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_emision_id', $cmb_filtro_vta_presupuesto_tipo_emision_id, Criterio::IGUAL);
}
if($cmb_filtro_gral_actividad_id != 0){
    $criterio->add('vta_presupuesto.gral_actividad_id', $cmb_filtro_gral_actividad_id, Criterio::IGUAL);    
}
if($cmb_filtro_gral_escenario_id != 0){
    $criterio->add('vta_presupuesto.gral_escenario_id', $cmb_filtro_gral_escenario_id, Criterio::IGUAL);    
}

$criterio->addFinSubconsulta();


if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();
    $criterio->add('vta_presupuesto.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('vta_presupuesto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_presupuesto.persona_documento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.codigo_marca', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.codigo_interno', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.claves', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//    $criterio->add('vta_presupuesto.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
//    $criterio->add('vta_presupuesto.fecha_vencimiento', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
//    $criterio->add('vta_presupuesto.fecha_entrega', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
//    $criterio->add('vta_presupuesto.importe_total', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//    $criterio->add('vta_presupuesto.cantidad_items', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//    $criterio->add('vta_presupuesto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//    $criterio->add('vta_presupuesto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}


$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_presupuesto.cli_cliente_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'vta_presupuesto.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_presupuesto_ins_insumo.ins_insumo_id', 'LEFT JOIN');
//$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_presupuesto.vta_vendedor_id', 'LEFT JOIN');
//$criterio->addRealJoin('vta_comisionista', 'vta_comisionista.id', 'vta_presupuesto.vta_comisionista_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_presupuesto.gral_fp_cuota_id', 'LEFT JOIN');
//$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_presupuesto.ins_tipo_lista_precio_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_presupuesto_tipo_venta', 'vta_presupuesto_tipo_venta.id', 'vta_presupuesto.vta_presupuesto_tipo_venta_id', 'LEFT JOIN');
//$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_presupuesto.vta_tipo_factura_id', 'LEFT JOIN');
$criterio->addTabla('vta_presupuesto');

$criterio->setCriterios();
?>

