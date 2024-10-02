<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(Gral::VARS_POST, 'txt_buscador', '');
$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', '');
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', '');
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_prv_proveedor_id', 0);
$cmb_filtro_imputable = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_imputable', -1);

Gral::setSes(PdeComprobante::SES_PROVEEDOR_SELECCIONADO, $prv_proveedor_id);

// -----------------------------------------------------------------------------
// PdeFactura
// -----------------------------------------------------------------------------
$criterio_factura = new Criterio(PdeComprobante::SES_CRITERIOS_FACTURA);
$criterio_factura->setAmbiguo(false);
$criterio_factura->addDistinct(true);

$criterio_factura->addInicioSubconsulta();

$criterio_factura->add('', 'true', '', false, "");
$criterio_factura->add(PdeFacturaTipoEstado::GEN_ATTR_CODIGO, PdeFacturaTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

if (!empty($prv_proveedor_id)) {
    $criterio_factura->add(PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
}

if ($cmb_filtro_imputable != -1) {
    $criterio_factura->add(PdeFacturaTipoEstado::GEN_ATTR_IMPUTABLE, $cmb_filtro_imputable, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio_factura->add(PdeFactura::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL, 'fecha_desde');
}

if ($txt_filtro_hasta != "") {
    $criterio_factura->add(PdeFactura::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL, 'fecha_hasta');
}

$criterio_factura->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio_factura->addInicioSubconsulta();

    $criterio_factura->add(PdeFactura::GEN_ATTR_NUMERO_FACTURA_COMPLETO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio_factura->add(PdeFactura::GEN_ATTR_CAE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_factura->add(PdeFactura::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_factura->add(PdeFactura::GEN_ATTR_RAZON_SOCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_factura->add(PdeFactura::GEN_ATTR_CUIT, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_factura->add(PdeFactura::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio_factura->addFinSubconsulta();
}

$criterio_factura->addTabla(PdeFactura::GEN_TABLA);
$criterio_factura->addRealJoin(PdeFacturaTipoEstado::GEN_TABLA, PdeFacturaTipoEstado::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_factura->setCriterios();


// -----------------------------------------------------------------------------
// PdeNotaDebito
// -----------------------------------------------------------------------------
$criterio_nota_debito = new Criterio(PdeComprobante::SES_CRITERIOS_NOTA_DEBITO);
$criterio_nota_debito->setAmbiguo(false);
$criterio_nota_debito->addDistinct(true);

$criterio_nota_debito->addInicioSubconsulta();

$criterio_nota_debito->add('', 'true', '', false, "");
$criterio_nota_debito->add(PdeNotaDebitoTipoEstado::GEN_ATTR_CODIGO, PdeNotaDebitoTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

if (!empty($prv_proveedor_id)) {
    $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
}

if ($cmb_filtro_imputable >= 0) {
    $criterio_nota_debito->add(PdeNotaDebitoTipoEstado::GEN_ATTR_IMPUTABLE, $cmb_filtro_imputable, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL, 'fecha_desde');
}

if ($txt_filtro_hasta != "") {
    $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL, 'fecha_hasta');
}

$criterio_nota_debito->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio_nota_debito->addInicioSubconsulta();

    $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_CAE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_RAZON_SOCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_CUIT, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio_nota_debito->addFinSubconsulta();
}
$criterio_nota_debito->addTabla(PdeNotaDebito::GEN_TABLA);
$criterio_nota_debito->addRealJoin(PdeNotaDebitoTipoEstado::GEN_TABLA, PdeNotaDebitoTipoEstado::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_nota_debito->setCriterios();


// -----------------------------------------------------------------------------
// PdeNotaCredito
// -----------------------------------------------------------------------------
$criterio_nota_credito = new Criterio(PdeComprobante::SES_CRITERIOS_NOTA_CREDITO);
$criterio_nota_credito->setAmbiguo(false);
$criterio_nota_credito->addDistinct(true);

$criterio_nota_credito->addInicioSubconsulta();

$criterio_nota_credito->add('', 'true', '', false, "");
$criterio_nota_credito->add(PdeNotaCreditoTipoEstado::GEN_ATTR_CODIGO, PdeNotaCreditoTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

if (!empty($prv_proveedor_id)) {
    $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
}

if ($cmb_filtro_imputable >= 0) {
    $criterio_nota_credito->add(PdeNotaCreditoTipoEstado::GEN_ATTR_IMPUTABLE, $cmb_filtro_imputable, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL, 'fecha_desde');
}

if ($txt_filtro_hasta != "") {
    $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL, 'fecha_hasta');
}

$criterio_nota_credito->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio_nota_credito->addInicioSubconsulta();

    $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_NUMERO_NOTA_CREDITO_COMPLETO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_CAE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_RAZON_SOCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_CUIT, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio_nota_credito->addFinSubconsulta();
}
$criterio_nota_credito->addTabla(PdeNotaCredito::GEN_TABLA);
$criterio_nota_credito->addRealJoin(PdeNotaCreditoTipoEstado::GEN_TABLA, PdeNotaCreditoTipoEstado::GEN_ATTR_ID, PdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_nota_credito->setCriterios();


// -----------------------------------------------------------------------------
// PdeRecibo
// -----------------------------------------------------------------------------
$criterio_recibo = new Criterio(PdeComprobante::SES_CRITERIOS_RECIBO);
$criterio_recibo->setAmbiguo(false);
$criterio_recibo->addDistinct(true);

$criterio_recibo->addInicioSubconsulta();

$criterio_recibo->add('', 'true', '', false, "");
$criterio_recibo->add(PdeReciboTipoEstado::GEN_ATTR_CODIGO, PdeReciboTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

if (!empty($prv_proveedor_id)) {
    $criterio_recibo->add(PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
}

if ($cmb_filtro_imputable >= 0) {
    $criterio_recibo->add(PdeReciboTipoEstado::GEN_ATTR_IMPUTABLE, $cmb_filtro_imputable, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio_recibo->add(PdeRecibo::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL, 'fecha_desde');
}

if ($txt_filtro_hasta != "") {
    $criterio_recibo->add(PdeRecibo::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL, 'fecha_hasta');
}

$criterio_recibo->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio_recibo->addInicioSubconsulta();

    $criterio_recibo->add(PdeRecibo::GEN_ATTR_NUMERO_RECIBO_COMPLETO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio_recibo->add(PdeRecibo::GEN_ATTR_CAE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_recibo->add(PdeRecibo::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_recibo->add(PdeRecibo::GEN_ATTR_RAZON_SOCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_recibo->add(PdeRecibo::GEN_ATTR_CUIT, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_recibo->add(PdeRecibo::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio_recibo->addFinSubconsulta();
}

$criterio_recibo->addTabla(PdeRecibo::GEN_TABLA);
$criterio_recibo->addRealJoin(PdeReciboTipoEstado::GEN_TABLA, PdeReciboTipoEstado::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_recibo->setCriterios();
?>

