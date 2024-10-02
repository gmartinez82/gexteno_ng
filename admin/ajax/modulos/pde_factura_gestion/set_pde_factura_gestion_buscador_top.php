<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_codigo = Gral::getVars(1, 'txt_buscador_codigo', '');
$txt_buscador_numero_factura = Gral::getVars(1, 'txt_buscador_numero_factura', '');
$txt_buscador_cae = Gral::getVars(1, 'txt_buscador_cae', '');

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$txt_filtro_vencimiento_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_vencimiento_desde', "");
$txt_filtro_vencimiento_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_vencimiento_hasta', "");

$cmb_filtro_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_prv_proveedor_id', 0);
$cmb_filtro_gral_centro_costo_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_centro_costo_id', 0, Gral::TIPO_INTEGER);
$cmb_filtro_pde_factura_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_factura_tipo_estado_id', 0);
$cmb_filtro_pde_tipo_factura_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_tipo_factura_id', 0);
$cmb_filtro_pde_tipo_origen_factura_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_tipo_origen_factura_id', 0);
$cmb_filtro_pde_factura_concepto_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_factura_concepto_id', 0);


$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('pde_factura.fecha_emision', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('pde_factura.fecha_emision', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if ($txt_filtro_vencimiento_desde != "") {
    $criterio->add('pde_factura.fecha_vencimiento', Gral::getFechaToDB($txt_filtro_vencimiento_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_vencimiento_hasta != "") {
    $criterio->add('pde_factura.fecha_vencimiento', Gral::getFechaToDB($txt_filtro_vencimiento_hasta), Criterio::MENORIGUAL);
}
if (!empty($txt_buscador_codigo)) {
    $criterio->add('pde_factura.codigo', $txt_buscador_codigo, Criterio::LIKE);
}
if (!empty($txt_buscador_numero_factura)) {
    $criterio->add('pde_factura.numero_factura_completo', $txt_buscador_numero_factura, Criterio::LIKE);
}
if (!empty($txt_buscador_cae)) {
    $criterio->add('pde_factura.cae', $txt_buscador_cae, Criterio::LIKE);
}
if ($cmb_filtro_prv_proveedor_id != 0) {
    $criterio->add('pde_factura.prv_proveedor_id', $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_gral_centro_costo_id != 0) {
    $criterio->add('pde_factura_gral_centro_costo.gral_centro_costo_id', $cmb_filtro_gral_centro_costo_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_factura_tipo_estado_id != 0) {
    $criterio->add('pde_factura.pde_factura_tipo_estado_id', $cmb_filtro_pde_factura_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_tipo_factura_id != 0) {
    $criterio->add('pde_factura.pde_tipo_factura_id', $cmb_filtro_pde_tipo_factura_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_tipo_origen_factura_id != 0) {
    $criterio->add('pde_factura.pde_tipo_origen_factura_id', $cmb_filtro_pde_tipo_origen_factura_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_factura_concepto_id != 0) {
    $criterio->add('pde_factura_concepto.id', $cmb_filtro_pde_factura_concepto_id, Criterio::IGUAL);
}
$criterio->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio->addInicioSubconsulta();

    $criterio->add('pde_factura.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('pde_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_factura.numero_factura_completo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_factura.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_factura.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_factura.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_factura.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_factura.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_factura.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->add(InsInsumo::GEN_ATTR_CLAVES, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PdeFacturaItem::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PdeFacturaConcepto::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    
    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(PdeFacturaGralCentroCosto::GEN_TABLA, PdeFacturaGralCentroCosto::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_ID, PdeFacturaPdeOc::GEN_ATTR_PDE_OC_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdeOc::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');

$criterio->addRealJoin(PdeFacturaItem::GEN_TABLA, PdeFacturaItem::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(PdeFacturaConcepto::GEN_TABLA, PdeFacturaConcepto::GEN_ATTR_ID, PdeFacturaItem::GEN_ATTR_PDE_FACTURA_CONCEPTO_ID, 'LEFT JOIN');

//$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_factura.prv_proveedor_id', 'LEFT JOIN');
//$criterio->addRealJoin('pde_factura_tipo_estado', 'pde_factura_tipo_estado.id', 'pde_factura.pde_factura_tipo_estado_id', 'LEFT JOIN');
//$criterio->addRealJoin('pde_tipo_factura', 'pde_tipo_factura.id', 'pde_factura.pde_tipo_factura_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'pde_factura.gral_condicion_iva_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_factura.gral_tipo_personeria_id', 'LEFT JOIN');

$criterio->addTabla('pde_factura');
$criterio->setCriterios();
?>

