<?php
include_once '_autoload.php';
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$pag = Gral::getVars(Gral::VARS_GET, 'pag', 1);
VtaComprobante::setSesPag($pag);

// -----------------------------------------------------------------------------
// Creo Criterios de VtaFactura
// -----------------------------------------------------------------------------
$criterio_factura = new Criterio(VtaComprobante::SES_CRITERIOS_FACTURA);
$criterio_factura->setAmbiguo(false);
$criterio_factura->addDistinct(true);

$criterio_factura->addInicioSubconsulta();
$criterio_factura->add('', 'true', '', false, "");
$criterio_factura->add(VtaFactura::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
//$criterio_factura->add(VtaFacturaTipoEstado::GEN_ATTR_CODIGO, VtaFacturaTipoEstado::TIPO_ANULADO_SIN_CAE, Criterio::DISTINTO);
$criterio_factura->add(VtaFacturaTipoEstado::GEN_ATTR_APROBADO_AFIP, 1, Criterio::IGUAL);
$criterio_factura->add(VtaFacturaTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_factura->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

$criterio_factura->addFinSubconsulta();

$criterio_factura->addInicioSubconsulta();
$criterio_factura->add(VtaFactura::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_factura->add(VtaFactura::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_factura->addFinSubconsulta();


$criterio_factura->addTabla(VtaFactura::GEN_TABLA);
$criterio_factura->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, 'LEFT JOIN');
    $criterio_factura->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
    $criterio_factura->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
    $criterio_factura->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_factura->setCriteriosInicial();


// -----------------------------------------------------------------------------
// Creo Criterios de VtaNotaDebito
// -----------------------------------------------------------------------------
$criterio_nota_debito = new Criterio(VtaComprobante::SES_CRITERIOS_NOTA_DEBITO);
$criterio_nota_debito->setAmbiguo(false);
$criterio_nota_debito->addDistinct(true);

$criterio_nota_debito->addInicioSubconsulta();
$criterio_nota_debito->add('', 'true', '', false, "");
$criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
//$criterio_nota_debito->add(VtaNotaDebitoTipoEstado::GEN_ATTR_CODIGO, VtaNotaDebitoTipoEstado::TIPO_ANULADO_SIN_CAE, Criterio::DISTINTO);
$criterio_nota_debito->add(VtaNotaDebitoTipoEstado::GEN_ATTR_APROBADO_AFIP, 1, Criterio::IGUAL);
$criterio_nota_debito->add(VtaNotaDebitoTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_nota_debito->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

$criterio_nota_debito->addFinSubconsulta();

$criterio_nota_debito->addInicioSubconsulta();
$criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_nota_debito->addFinSubconsulta();

$criterio_nota_debito->addTabla(VtaNotaDebito::GEN_TABLA);
$criterio_nota_debito->addRealJoin(VtaNotaDebitoTipoEstado::GEN_TABLA, VtaNotaDebitoTipoEstado::GEN_ATTR_ID, VtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID, 'LEFT JOIN');
    $criterio_nota_debito->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
    $criterio_nota_debito->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
    $criterio_nota_debito->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_nota_debito->setCriteriosInicial();


// -----------------------------------------------------------------------------
// Creo Criterios de VtaNotaCredito
// -----------------------------------------------------------------------------
$criterio_nota_credito = new Criterio(VtaComprobante::SES_CRITERIOS_NOTA_CREDITO);
$criterio_nota_credito->setAmbiguo(false);
$criterio_nota_credito->addDistinct(true);

$criterio_nota_credito->addInicioSubconsulta();
$criterio_nota_credito->add('', 'true', '', false, "");
$criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
//$criterio_nota_credito->add(VtaNotaCreditoTipoEstado::GEN_ATTR_CODIGO, VtaNotaCreditoTipoEstado::TIPO_ANULADO_SIN_CAE, Criterio::DISTINTO);
$criterio_nota_credito->add(VtaNotaCreditoTipoEstado::GEN_ATTR_APROBADO_AFIP, 1, Criterio::IGUAL);
$criterio_nota_credito->add(VtaNotaCreditoTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_nota_credito->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

$criterio_nota_credito->addFinSubconsulta();

$criterio_nota_credito->addInicioSubconsulta();
$criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_nota_credito->addFinSubconsulta();

$criterio_nota_credito->addTabla(VtaNotaCredito::GEN_TABLA);
$criterio_nota_credito->addRealJoin(VtaNotaCreditoTipoEstado::GEN_TABLA, VtaNotaCreditoTipoEstado::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_TIPO_ESTADO_ID, 'LEFT JOIN');
    $criterio_nota_credito->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
    $criterio_nota_credito->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
    $criterio_nota_credito->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_nota_credito->setCriteriosInicial();


// -----------------------------------------------------------------------------
// Creo Criterios de VtaRecibo
// -----------------------------------------------------------------------------
$criterio_recibo = new Criterio(VtaComprobante::SES_CRITERIOS_RECIBO);
$criterio_recibo->setAmbiguo(false);
$criterio_recibo->addDistinct(true);

$criterio_recibo->addInicioSubconsulta();
$criterio_recibo->add('', 'true', '', false, "");
$criterio_recibo->add(VtaReciboTipoEstado::GEN_ATTR_CODIGO, VtaReciboTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);
$criterio_recibo->add(VtaReciboTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_recibo->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

$criterio_recibo->addFinSubconsulta();

$criterio_recibo->addInicioSubconsulta();
$criterio_recibo->add(VtaRecibo::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_recibo->add(VtaRecibo::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_recibo->addFinSubconsulta();

$criterio_recibo->addTabla(VtaRecibo::GEN_TABLA);
$criterio_recibo->addRealJoin(VtaReciboTipoEstado::GEN_TABLA, VtaReciboTipoEstado::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID, 'LEFT JOIN');
    $criterio_recibo->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
    $criterio_recibo->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
    $criterio_recibo->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_recibo->setCriteriosInicial();


// -----------------------------------------------------------------------------
// Creo Criterios de VtaAjusteDebe Debe
// -----------------------------------------------------------------------------
$criterio_ajuste_debe = new Criterio(VtaComprobante::SES_CRITERIOS_AJUSTE_DEBE);
$criterio_ajuste_debe->setAmbiguo(false);
$criterio_ajuste_debe->addDistinct(true);

$criterio_ajuste_debe->addInicioSubconsulta();
$criterio_ajuste_debe->add('', 'true', '', false, "");
//$criterio_ajuste_debe->add(VtaAjusteDebeTipoEstado::GEN_ATTR_CODIGO, VtaAjusteDebeTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);
$criterio_ajuste_debe->add(VtaAjusteDebeTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
$criterio_ajuste_debe->add(VtaTipoAjusteDebe::GEN_ATTR_CODIGO, VtaTipoAjusteDebe::TIPO_AJUSTE_X_DEBE, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_ajuste_debe->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

$criterio_ajuste_debe->addFinSubconsulta();

$criterio_ajuste_debe->addInicioSubconsulta();
$criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_ajuste_debe->addFinSubconsulta();

$criterio_ajuste_debe->addTabla(VtaAjusteDebe::GEN_TABLA);
$criterio_ajuste_debe->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_ajuste_debe->addRealJoin(VtaTipoAjusteDebe::GEN_TABLA, VtaTipoAjusteDebe::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, 'LEFT JOIN');
    $criterio_ajuste_debe->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
    $criterio_ajuste_debe->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
    $criterio_ajuste_debe->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_ajuste_debe->setCriteriosInicial();


// -----------------------------------------------------------------------------
// Creo Criterios de VtaAjusteHaber Haber
// -----------------------------------------------------------------------------
$criterio_ajuste_haber = new Criterio(VtaComprobante::SES_CRITERIOS_AJUSTE_HABER);
$criterio_ajuste_haber->setAmbiguo(false);
$criterio_ajuste_haber->addDistinct(true);

$criterio_ajuste_haber->addInicioSubconsulta();
$criterio_ajuste_haber->add('', 'true', '', false, "");
$criterio_ajuste_haber->add(VtaAjusteHaberTipoEstado::GEN_ATTR_CODIGO, VtaAjusteHaberTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);
$criterio_ajuste_haber->add(VtaAjusteHaberTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
$criterio_ajuste_haber->add(VtaTipoAjusteHaber::GEN_ATTR_CODIGO, VtaTipoAjusteHaber::TIPO_AJUSTE_X_HABER, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_ajuste_haber->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

$criterio_ajuste_haber->addFinSubconsulta();

$criterio_ajuste_haber->addInicioSubconsulta();
$criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_ajuste_haber->addFinSubconsulta();

$criterio_ajuste_haber->addTabla(VtaAjusteHaber::GEN_TABLA);
$criterio_ajuste_haber->addRealJoin(VtaAjusteHaberTipoEstado::GEN_TABLA, VtaAjusteHaberTipoEstado::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_ajuste_haber->addRealJoin(VtaTipoAjusteHaber::GEN_TABLA, VtaTipoAjusteHaber::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, 'LEFT JOIN');
    $criterio_ajuste_haber->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
    $criterio_ajuste_haber->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
    $criterio_ajuste_haber->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_ajuste_haber->setCriteriosInicial();

// -----------------------------------------------------------------------------
// Creo Criterios de VtaOrdenVenta
// -----------------------------------------------------------------------------
$criterio_orden_venta = new Criterio(VtaComprobante::SES_CRITERIOS_ORDEN_VENTA);
$criterio_orden_venta->setAmbiguo(false);
$criterio_orden_venta->addDistinct(true);

$criterio_orden_venta->addInicioSubconsulta();
$criterio_orden_venta->add('', 'true', '', false, "");
$criterio_orden_venta->add(VtaOrdenVentaTipoEstado::TIPO_ACTIVO, 1, Criterio::IGUAL);

// se aplica filtro de alcance del usuario
if ($us_usuario_autenticado->getAlcanceClientesLimitado()) {
    $criterio_orden_venta->add(GralZona::GEN_ATTR_ID, $gral_zonas_autorizadas_ids, Criterio::IN_ARRAY);
}

$criterio_orden_venta->addFinSubconsulta();

//$criterio_orden_venta->addInicioSubconsulta();
//$criterio_orden_venta->add(VtaOrdenVenta::GEN_ATTR_CREADO.'::DATE', date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
//$criterio_orden_venta->add(VtaOrdenVenta::GEN_ATTR_CREADO.'::DATE', date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
//$criterio_orden_venta->addFinSubconsulta();

$criterio_orden_venta->addTabla(VtaOrdenVenta::GEN_TABLA);
$criterio_orden_venta->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, 'LEFT JOIN');
    $criterio_orden_venta->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
    $criterio_orden_venta->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
    $criterio_orden_venta->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
    $criterio_orden_venta->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
$criterio_orden_venta->setCriteriosInicial();


$paginador = new Paginador(VtaComprobante::getSesPagCantidad(), VtaComprobante::getSesPag());
$paginador = null;


// Columna 1
$vta_facturas = VtaFactura::getVtaFacturas($paginador, $criterio_factura);
$vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitos($paginador, $criterio_nota_debito);
$vta_ajuste_debes = array();

// Columna 2
$vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditos($paginador, $criterio_nota_credito);
$vta_recibos = VtaRecibo::getVtaRecibos($paginador, $criterio_recibo);
$vta_ajuste_habers = array();

// -----------------------------------------------------------------------------
// solo se incluyen los ajustes, si el usuario opera con ajustes
// -----------------------------------------------------------------------------
$filtro_incluir_ajustes = Gral::getSes(VtaComprobante::SES_INCLUIR_AJUSTES);
if ($filtro_incluir_ajustes == 1) {
    $vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebes($paginador, $criterio_ajuste_debe);
    $vta_ajuste_habers = VtaAjusteHaber::getVtaAjusteHabers($paginador, $criterio_ajuste_haber);
}

$vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas($paginador, $criterio_orden_venta);

//Gral::prr($vta_facturas);
//Gral::prr($vta_nota_debitos);
//Gral::prr($vta_nota_creditos);
//Gral::prr($vta_recibos);
//Gral::prr($vta_ajuste_debes);
//Gral::prr($vta_ajuste_habers);
//Gral::prr($vta_ajuste_habers);
//Gral::prr($vta_orden_ventas);

$cli_cliente_id = Gral::getSes(VtaComprobante::SES_CLIENTE_SELECCIONADO);
if ($cli_cliente_id != '') {
    $cli_cliente_seleccionado = CliCliente::getOxId($cli_cliente_id);
}

$fecha_desde = $criterio_factura->getValorDeCampoXPos('fecha_desde');
$fecha_hasta = $criterio_factura->getValorDeCampoXPos('fecha_hasta');
$filtro_imputable = $criterio_factura->getValorDeCampo('vta_factura_tipo_estado.imputable');

if ($cli_cliente_seleccionado) {
    $fecha_hasta_saldo = Date::sumarDias($fecha_desde, -1);
    $importe_total_saldo_inicial_en_fecha = $cli_cliente_seleccionado->getSaldoDeCuentaEnFechaImporte($gral_empresa_id, $fecha_hasta_saldo);
}
//------------------------------------------------------------------------------
// se carga array de resumen
//------------------------------------------------------------------------------
if ($cli_cliente_seleccionado) {
    $arr_comprobante_totales = VtaComprobante::getArrTotales($vta_facturas, $vta_nota_debitos, $vta_nota_creditos, $vta_recibos, $vta_ajuste_debes, $vta_ajuste_habers, $importe_total_saldo_inicial_en_fecha, $vta_orden_ventas);
    //Gral::prr($arr_comprobante_totales);
}

include 'vta_comprobante_gestion_datos.php';
?>

<script>
    setInit();
    setInitVtaComprobanteGestion();
</script>