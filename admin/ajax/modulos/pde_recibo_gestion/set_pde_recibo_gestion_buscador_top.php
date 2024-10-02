<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_codigo = Gral::getVars(1, 'txt_buscador_codigo', '');
$txt_buscador_numero_recibo = Gral::getVars(1, 'txt_buscador_numero_recibo', '');
$txt_buscador_cae = Gral::getVars(1, 'txt_buscador_cae', '');

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_prv_proveedor_id', 0);
$cmb_filtro_pde_recibo_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_recibo_tipo_estado_id', 0);
$cmb_filtro_pde_tipo_recibo_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_tipo_recibo_id', 0);
$cmb_filtro_pde_tipo_origen_recibo_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_tipo_origen_recibo_id', 0);

$cmb_filtro_pde_recibo_condicion_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_recibo_condicion_pago_id', 0);
$cmb_filtro_pde_recibo_tipo_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_recibo_tipo_pago_id', 0);

$criterio = new Criterio(PdeRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('pde_recibo.fecha_emision', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('pde_recibo.fecha_emision', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if (!empty($txt_buscador_codigo)) {
    $criterio->add('pde_recibo.codigo', $txt_buscador_codigo, Criterio::LIKE);
}
if (!empty($txt_buscador_numero_recibo)) {
    $criterio->add('pde_recibo.numero_recibo_completo', $txt_buscador_numero_recibo, Criterio::LIKE);
}
if (!empty($txt_buscador_cae)) {
    $criterio->add('pde_recibo.cae', $txt_buscador_cae, Criterio::LIKE);
}
if ($cmb_filtro_prv_proveedor_id != 0) {
    $criterio->add('pde_recibo.prv_proveedor_id', $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_recibo_tipo_estado_id != 0) {
    $criterio->add('pde_recibo.pde_recibo_tipo_estado_id', $cmb_filtro_pde_recibo_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_tipo_recibo_id != 0) {
    $criterio->add('pde_recibo.pde_tipo_recibo_id', $cmb_filtro_pde_tipo_recibo_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_tipo_origen_recibo_id != 0) {
    $criterio->add('pde_recibo.pde_tipo_origen_recibo_id', $cmb_filtro_pde_tipo_origen_recibo_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_recibo_condicion_pago_id != 0) {
    $criterio->add('pde_recibo.pde_recibo_condicion_pago_id', $cmb_filtro_pde_recibo_condicion_pago_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_recibo_tipo_pago_id != 0) {
    $criterio->add('pde_recibo.pde_recibo_tipo_pago_id', $cmb_filtro_pde_recibo_tipo_pago_id, Criterio::IGUAL);
}


$criterio->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio->addInicioSubconsulta();

    $criterio->add('pde_recibo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('pde_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_recibo.numero_recibo_completo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_recibo.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_recibo.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_recibo.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_recibo.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_recibo.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_recibo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->addFinSubconsulta();
}

//$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recibo.prv_proveedor_id', 'LEFT JOIN');
//$criterio->addRealJoin('pde_recibo_tipo_estado', 'pde_recibo_tipo_estado.id', 'pde_recibo.pde_recibo_tipo_estado_id', 'LEFT JOIN');
//$criterio->addRealJoin('pde_tipo_recibo', 'pde_tipo_recibo.id', 'pde_recibo.pde_tipo_recibo_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'pde_recibo.gral_condicion_iva_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_recibo.gral_tipo_personeria_id', 'LEFT JOIN');

$criterio->addTabla('pde_recibo');
$criterio->setCriterios();
?>

