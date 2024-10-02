<?php

include_once '_autoload.php';
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$txt_buscador = Gral::getVars(Gral::VARS_POST, 'txt_buscador', '');
$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', '');
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', '');
$cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0);
$cmb_filtro_imputable = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_imputable', -1);
$cmb_filtro_incluir_ajustes = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_incluir_ajustes', 0);

Gral::setSes(VtaComprobante::SES_CLIENTE_SELECCIONADO, $cli_cliente_id);
Gral::setSes(VtaComprobante::SES_INCLUIR_AJUSTES, $cmb_filtro_incluir_ajustes);

// -----------------------------------------------------------------------------
// VtaFactura
// -----------------------------------------------------------------------------
$criterio_factura = new Criterio(VtaComprobante::SES_CRITERIOS_FACTURA);
$criterio_factura->setAmbiguo(false);
$criterio_factura->addDistinct(true);

$criterio_factura->addInicioSubconsulta();

$criterio_factura->add('', 'true', '', false, "");
$criterio_factura->add(VtaFactura::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
//$criterio_factura->add(VtaFacturaTipoEstado::GEN_ATTR_CODIGO, VtaFacturaTipoEstado::TIPO_ANULADO_SIN_CAE, Criterio::DISTINTO);
$criterio_factura->add(VtaFacturaTipoEstado::GEN_ATTR_APROBADO_AFIP, 1, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_factura->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

if (!empty($cli_cliente_id)) {
    $criterio_factura->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_imputable != -1) {
    $criterio_factura->add(VtaFacturaTipoEstado::GEN_ATTR_IMPUTABLE, $cmb_filtro_imputable, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio_factura->add(VtaFactura::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL, 'fecha_desde');
}

if ($txt_filtro_hasta != "") {
    $criterio_factura->add(VtaFactura::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL, 'fecha_hasta');
}

$criterio_factura->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio_factura->addInicioSubconsulta();

    $criterio_factura->add(VtaFactura::GEN_ATTR_NUMERO_FACTURA_COMPLETO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio_factura->add(VtaFactura::GEN_ATTR_CAE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_factura->add(VtaFactura::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_factura->add(VtaFactura::GEN_ATTR_RAZON_SOCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_factura->add(VtaFactura::GEN_ATTR_CUIT, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_factura->add(VtaFactura::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio_factura->addFinSubconsulta();
}

$criterio_factura->addTabla(VtaFactura::GEN_TABLA);
$criterio_factura->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_factura->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio_factura->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio_factura->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_factura->setCriterios();


// -----------------------------------------------------------------------------
// VtaNotaDebito
// -----------------------------------------------------------------------------
$criterio_nota_debito = new Criterio(VtaComprobante::SES_CRITERIOS_NOTA_DEBITO);
$criterio_nota_debito->setAmbiguo(false);
$criterio_nota_debito->addDistinct(true);

$criterio_nota_debito->addInicioSubconsulta();

$criterio_nota_debito->add('', 'true', '', false, "");
$criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
//$criterio_nota_debito->add(VtaNotaDebitoTipoEstado::GEN_ATTR_CODIGO, VtaNotaDebitoTipoEstado::TIPO_ANULADO_SIN_CAE, Criterio::DISTINTO);
$criterio_nota_debito->add(VtaNotaDebitoTipoEstado::GEN_ATTR_APROBADO_AFIP, 1, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_nota_debito->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

if (!empty($cli_cliente_id)) {
    $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_imputable >= 0) {
    $criterio_nota_debito->add(VtaNotaDebitoTipoEstado::GEN_ATTR_IMPUTABLE, $cmb_filtro_imputable, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL, 'fecha_desde');
}

if ($txt_filtro_hasta != "") {
    $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL, 'fecha_hasta');
}

$criterio_nota_debito->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio_nota_debito->addInicioSubconsulta();

    $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_CAE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_RAZON_SOCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_CUIT, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio_nota_debito->addFinSubconsulta();
}
$criterio_nota_debito->addTabla(VtaNotaDebito::GEN_TABLA);
$criterio_nota_debito->addRealJoin(VtaNotaDebitoTipoEstado::GEN_TABLA, VtaNotaDebitoTipoEstado::GEN_ATTR_ID, VtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_nota_debito->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio_nota_debito->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio_nota_debito->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_nota_debito->setCriterios();


// -----------------------------------------------------------------------------
// VtaNotaCredito
// -----------------------------------------------------------------------------
$criterio_nota_credito = new Criterio(VtaComprobante::SES_CRITERIOS_NOTA_CREDITO);
$criterio_nota_credito->setAmbiguo(false);
$criterio_nota_credito->addDistinct(true);

$criterio_nota_credito->addInicioSubconsulta();

$criterio_nota_credito->add('', 'true', '', false, "");
$criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
//$criterio_nota_credito->add(VtaNotaCreditoTipoEstado::GEN_ATTR_CODIGO, VtaNotaCreditoTipoEstado::TIPO_ANULADO_SIN_CAE, Criterio::DISTINTO);
$criterio_nota_credito->add(VtaNotaCreditoTipoEstado::GEN_ATTR_APROBADO_AFIP, 1, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_nota_credito->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

if (!empty($cli_cliente_id)) {
    $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_imputable >= 0) {
    $criterio_nota_credito->add(VtaNotaCreditoTipoEstado::GEN_ATTR_IMPUTABLE, $cmb_filtro_imputable, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL, 'fecha_desde');
}

if ($txt_filtro_hasta != "") {
    $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL, 'fecha_hasta');
}

$criterio_nota_credito->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio_nota_credito->addInicioSubconsulta();

    $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_NUMERO_NOTA_CREDITO_COMPLETO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_CAE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_RAZON_SOCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_CUIT, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio_nota_credito->addFinSubconsulta();
}
$criterio_nota_credito->addTabla(VtaNotaCredito::GEN_TABLA);
$criterio_nota_credito->addRealJoin(VtaNotaCreditoTipoEstado::GEN_TABLA, VtaNotaCreditoTipoEstado::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_nota_credito->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio_nota_credito->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio_nota_credito->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_nota_credito->setCriterios();


// -----------------------------------------------------------------------------
// VtaRecibo
// -----------------------------------------------------------------------------
$criterio_recibo = new Criterio(VtaComprobante::SES_CRITERIOS_RECIBO);
$criterio_recibo->setAmbiguo(false);
$criterio_recibo->addDistinct(true);

$criterio_recibo->addInicioSubconsulta();

$criterio_recibo->add('', 'true', '', false, "");
$criterio_recibo->add(VtaReciboTipoEstado::GEN_ATTR_CODIGO, VtaReciboTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_recibo->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

if (!empty($cli_cliente_id)) {
    $criterio_recibo->add(VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_imputable >= 0) {
    $criterio_recibo->add(VtaReciboTipoEstado::GEN_ATTR_IMPUTABLE, $cmb_filtro_imputable, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio_recibo->add(VtaRecibo::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL, 'fecha_desde');
}

if ($txt_filtro_hasta != "") {
    $criterio_recibo->add(VtaRecibo::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL, 'fecha_hasta');
}

$criterio_recibo->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio_recibo->addInicioSubconsulta();

    $criterio_recibo->add(VtaRecibo::GEN_ATTR_NUMERO_RECIBO_COMPLETO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio_recibo->add(VtaRecibo::GEN_ATTR_CAE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_recibo->add(VtaRecibo::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_recibo->add(VtaRecibo::GEN_ATTR_RAZON_SOCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_recibo->add(VtaRecibo::GEN_ATTR_CUIT, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_recibo->add(VtaRecibo::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio_recibo->addFinSubconsulta();
}

$criterio_recibo->addTabla(VtaRecibo::GEN_TABLA);
$criterio_recibo->addRealJoin(VtaReciboTipoEstado::GEN_TABLA, VtaReciboTipoEstado::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_recibo->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio_recibo->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio_recibo->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_recibo->setCriterios();


// -----------------------------------------------------------------------------
// VtaAjuste Debe
// -----------------------------------------------------------------------------
$criterio_ajuste_debe = new Criterio(VtaComprobante::SES_CRITERIOS_AJUSTE_DEBE);
$criterio_ajuste_debe->setAmbiguo(false);
$criterio_ajuste_debe->addDistinct(true);

$criterio_ajuste_debe->addInicioSubconsulta();

$criterio_ajuste_debe->add('', 'true', '', false, "");
//$criterio_ajuste_debe->add(VtaAjusteDebeTipoEstado::GEN_ATTR_CODIGO, VtaAjusteDebeTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_ajuste_debe->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

if (!empty($cli_cliente_id)) {
    $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_imputable >= 0) {
    $criterio_ajuste_debe->add(VtaAjusteDebeTipoEstado::GEN_ATTR_IMPUTABLE, $cmb_filtro_imputable, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL, 'fecha_desde');
}

if ($txt_filtro_hasta != "") {
    $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL, 'fecha_hasta');
}

$criterio_ajuste_debe->add(VtaTipoAjusteDebe::GEN_ATTR_CODIGO, VtaTipoAjusteDebe::TIPO_AJUSTE_X_DEBE, Criterio::IGUAL);

$criterio_ajuste_debe->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio_ajuste_debe->addInicioSubconsulta();

    $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_NUMERO_AJUSTE_DEBE_COMPLETO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_CAE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_RAZON_SOCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_CUIT, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio_ajuste_debe->addFinSubconsulta();
}

$criterio_ajuste_debe->addTabla(VtaAjusteDebe::GEN_TABLA);
$criterio_ajuste_debe->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_ajuste_debe->addRealJoin(VtaTipoAjusteDebe::GEN_TABLA, VtaTipoAjusteDebe::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, 'LEFT JOIN');
$criterio_ajuste_debe->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio_ajuste_debe->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio_ajuste_debe->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_ajuste_debe->setCriterios();



// -----------------------------------------------------------------------------
// VtaAjuste Haber
// -----------------------------------------------------------------------------
$criterio_ajuste_haber = new Criterio(VtaComprobante::SES_CRITERIOS_AJUSTE_HABER);
$criterio_ajuste_haber->setAmbiguo(false);
$criterio_ajuste_haber->addDistinct(true);

$criterio_ajuste_haber->addInicioSubconsulta();

$criterio_ajuste_haber->add('', 'true', '', false, "");
$criterio_ajuste_haber->add(VtaAjusteHaberTipoEstado::GEN_ATTR_CODIGO, VtaAjusteHaberTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_ajuste_haber->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

if (!empty($cli_cliente_id)) {
    $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_imputable >= 0) {
    $criterio_ajuste_haber->add(VtaAjusteHaberTipoEstado::GEN_ATTR_IMPUTABLE, $cmb_filtro_imputable, Criterio::IGUAL);
}

if ($txt_filtro_desde != "") {
    $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL, 'fecha_desde');
}

if ($txt_filtro_hasta != "") {
    $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL, 'fecha_hasta');
}

$criterio_ajuste_haber->add(VtaTipoAjusteHaber::GEN_ATTR_CODIGO, VtaTipoAjusteHaber::TIPO_AJUSTE_X_HABER, Criterio::IGUAL);

$criterio_ajuste_haber->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio_ajuste_haber->addInicioSubconsulta();

    $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_NUMERO_AJUSTE_HABER_COMPLETO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_CAE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_RAZON_SOCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_CUIT, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio_ajuste_haber->addFinSubconsulta();
}

$criterio_ajuste_haber->addTabla(VtaAjusteHaber::GEN_TABLA);
$criterio_ajuste_haber->addRealJoin(VtaAjusteHaberTipoEstado::GEN_TABLA, VtaAjusteHaberTipoEstado::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_ajuste_haber->addRealJoin(VtaTipoAjusteHaber::GEN_TABLA, VtaTipoAjusteHaber::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, 'LEFT JOIN');
$criterio_ajuste_haber->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio_ajuste_haber->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio_ajuste_haber->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_ajuste_haber->setCriterios();

// -----------------------------------------------------------------------------
// Creo Criterios de VtaOrdenVenta
// -----------------------------------------------------------------------------
$criterio_orden_venta = new Criterio(VtaComprobante::SES_CRITERIOS_ORDEN_VENTA);
$criterio_orden_venta->setAmbiguo(false);
$criterio_orden_venta->addDistinct(true);

$criterio_orden_venta->addInicioSubconsulta();
$criterio_orden_venta->add('', 'true', '', false, "");
$criterio_orden_venta->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
$criterio_orden_venta->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_orden_venta->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

if (!empty($cli_cliente_id)) {
    $criterio_orden_venta->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
}

$criterio_orden_venta->addFinSubconsulta();

//$criterio_orden_venta->addInicioSubconsulta();
//$criterio_orden_venta->add(VtaOrdenVenta::GEN_ATTR_CREADO.'::DATE', date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
//$criterio_orden_venta->add(VtaOrdenVenta::GEN_ATTR_CREADO.'::DATE', date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
//$criterio_orden_venta->addFinSubconsulta();

$criterio_orden_venta->addTabla(VtaOrdenVenta::GEN_TABLA);
$criterio_orden_venta->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_orden_venta->addRealJoin(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID, 'LEFT JOIN');
$criterio_orden_venta->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
$criterio_orden_venta->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio_orden_venta->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio_orden_venta->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_orden_venta->setCriterios();
?>
