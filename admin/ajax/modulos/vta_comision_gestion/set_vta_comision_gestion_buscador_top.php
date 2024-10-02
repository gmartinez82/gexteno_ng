<?php
include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_numero_comision = Gral::getVars(1, 'txt_buscador_numero_comision', '');

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_vta_preventista_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_preventista_id', 0);
$cmb_filtro_vta_comprador_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_comprador_id', 0);
$cmb_filtro_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_vendedor_id', 0);
$cmb_filtro_vta_comision_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_comision_tipo_estado_id', 0);

$criterio = new Criterio(VtaComision::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('vta_comision.fecha_emision', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('vta_comision.fecha_emision', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if (!empty($txt_buscador_codigo)) {
    $criterio->add('vta_comision.codigo', $txt_buscador_codigo, Criterio::LIKE);
}
if ($cmb_filtro_vta_preventista_id != 0) {
    $criterio->add('vta_preventista.id', $cmb_filtro_vta_preventista_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_comprador_id != 0) {
    $criterio->add('vta_comprador.id', $cmb_filtro_vta_comprador_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add('vta_vendedor.id', $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_comision_tipo_estado_id != 0) {
    $criterio->add('vta_comision_tipo_estado.id', $cmb_filtro_vta_comision_tipo_estado_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();

    $criterio->add('vta_comision.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('vta_comision.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->add('vta_factura.numero_factura_completo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    
    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_comision.vta_preventista_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_comision.vta_comprador_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_comision.vta_vendedor_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_comision_tipo_estado', 'vta_comision_tipo_estado.id', 'vta_comision.vta_comision_tipo_estado_id', 'LEFT JOIN');

$criterio->addRealJoin('vta_comision_vta_factura', 'vta_comision_vta_factura.vta_comision_id', 'vta_comision.id', 'LEFT JOIN');
$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_comision_vta_factura.vta_factura_id', 'LEFT JOIN');

$criterio->addTabla('vta_comision');
$criterio->setCriterios();
?>

