<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_numero_orden_pago = Gral::getVars(1, 'txt_buscador_numero_orden_pago', '');

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_prv_proveedor_id', 0);
$cmb_filtro_pde_orden_pago_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_orden_pago_tipo_estado_id', 0);
$cmb_filtro_pde_tipo_orden_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_tipo_orden_pago_id', 0);


$criterio = new Criterio(PdeOrdenPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('pde_orden_pago.fecha_emision', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('pde_orden_pago.fecha_emision', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if (!empty($txt_buscador_numero_orden_pago)) {
    $criterio->add('pde_orden_pago.codigo', $txt_buscador_numero_orden_pago, Criterio::LIKE);
}
if ($cmb_filtro_prv_proveedor_id != 0) {
    $criterio->add('prv_proveedor.id', $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_orden_pago_tipo_estado_id != 0) {
    $criterio->add('pde_orden_pago_tipo_estado.id', $cmb_filtro_pde_orden_pago_tipo_estado_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();

    $criterio->add('pde_orden_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('pde_orden_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_orden_pago.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_orden_pago.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_orden_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->add('pde_factura.numero_factura_completo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_nota_debito.numero_nota_debito_completo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    
    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_orden_pago.prv_proveedor_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_orden_pago_tipo_estado', 'pde_orden_pago_tipo_estado.id', 'pde_orden_pago.pde_orden_pago_tipo_estado_id', 'LEFT JOIN');

$criterio->addRealJoin('pde_orden_pago_pde_factura', 'pde_orden_pago_pde_factura.pde_orden_pago_id', 'pde_orden_pago.id', 'LEFT JOIN');
$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_orden_pago_pde_factura.pde_factura_id', 'LEFT JOIN');

$criterio->addRealJoin('pde_orden_pago_pde_nota_debito', 'pde_orden_pago_pde_nota_debito.pde_orden_pago_id', 'pde_orden_pago.id', 'LEFT JOIN');
$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'pde_orden_pago_pde_nota_debito.pde_nota_debito_id', 'LEFT JOIN');

$criterio->addTabla('pde_orden_pago');
$criterio->setCriterios();
?>

