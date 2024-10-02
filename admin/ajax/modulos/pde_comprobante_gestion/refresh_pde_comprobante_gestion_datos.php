<?php
include_once '_autoload.php';

$pag = Gral::getVars(Gral::VARS_GET, 'pag', 1);
PdeComprobante::setSesPag($pag);

// -----------------------------------------------------------------------------
// Creo Criterios de PdeFactura
// -----------------------------------------------------------------------------
$criterio_factura = new Criterio(PdeComprobante::SES_CRITERIOS_FACTURA);
$criterio_factura->setAmbiguo(false);
$criterio_factura->addDistinct(true);

$criterio_factura->addInicioSubconsulta();
$criterio_factura->add('', 'true', '', false, "");
$criterio_factura->add(PdeFacturaTipoEstado::GEN_ATTR_CODIGO, PdeFacturaTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

$criterio_factura->add(PdeFacturaTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
$criterio_factura->addFinSubconsulta();

$criterio_factura->addInicioSubconsulta();
$criterio_factura->add(PdeFactura::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_factura->add(PdeFactura::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_factura->addFinSubconsulta();


$criterio_factura->addTabla(PdeFactura::GEN_TABLA);
$criterio_factura->addRealJoin(PdeFacturaTipoEstado::GEN_TABLA, PdeFacturaTipoEstado::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_factura->setCriteriosInicial();


// -----------------------------------------------------------------------------
// Creo Criterios de PdeNotaDebito
// -----------------------------------------------------------------------------
$criterio_nota_debito = new Criterio(PdeComprobante::SES_CRITERIOS_NOTA_DEBITO);
$criterio_nota_debito->setAmbiguo(false);
$criterio_nota_debito->addDistinct(true);

$criterio_nota_debito->addInicioSubconsulta();
$criterio_nota_debito->add('', 'true', '', false, "");
$criterio_nota_debito->add(PdeNotaDebitoTipoEstado::GEN_ATTR_CODIGO, PdeNotaDebitoTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

$criterio_nota_debito->add(PdeNotaDebitoTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
$criterio_nota_debito->addFinSubconsulta();

$criterio_nota_debito->addInicioSubconsulta();
$criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_nota_debito->addFinSubconsulta();

$criterio_nota_debito->addTabla(PdeNotaDebito::GEN_TABLA);
$criterio_nota_debito->addRealJoin(PdeNotaDebitoTipoEstado::GEN_TABLA, PdeNotaDebitoTipoEstado::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_nota_debito->setCriteriosInicial();


// -----------------------------------------------------------------------------
// Creo Criterios de PdeNotaCredito
// -----------------------------------------------------------------------------
$criterio_nota_credito = new Criterio(PdeComprobante::SES_CRITERIOS_NOTA_CREDITO);
$criterio_nota_credito->setAmbiguo(false);
$criterio_nota_credito->addDistinct(true);

$criterio_nota_credito->addInicioSubconsulta();
$criterio_nota_credito->add('', 'true', '', false, "");
$criterio_nota_credito->add(PdeNotaCreditoTipoEstado::GEN_ATTR_CODIGO, PdeNotaCreditoTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

$criterio_nota_credito->add(PdeNotaCreditoTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
$criterio_nota_credito->addFinSubconsulta();

$criterio_nota_credito->addInicioSubconsulta();
$criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_nota_credito->addFinSubconsulta();

$criterio_nota_credito->addTabla(PdeNotaCredito::GEN_TABLA);
$criterio_nota_credito->addRealJoin(PdeNotaCreditoTipoEstado::GEN_TABLA, PdeNotaCreditoTipoEstado::GEN_ATTR_ID, PdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_nota_credito->setCriteriosInicial();


// -----------------------------------------------------------------------------
// Creo Criterios de PdeRecibo
// -----------------------------------------------------------------------------
$criterio_recibo = new Criterio(PdeComprobante::SES_CRITERIOS_RECIBO);
$criterio_recibo->setAmbiguo(false);
$criterio_recibo->addDistinct(true);

$criterio_recibo->addInicioSubconsulta();
$criterio_recibo->add('', 'true', '', false, "");
$criterio_recibo->add(PdeReciboTipoEstado::GEN_ATTR_CODIGO, PdeReciboTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

$criterio_recibo->add(PdeReciboTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
$criterio_recibo->addFinSubconsulta();

$criterio_recibo->addInicioSubconsulta();
$criterio_recibo->add(PdeRecibo::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MAYORIGUAL, 'fecha_desde', Criterio::_AND);
$criterio_recibo->add(PdeRecibo::GEN_ATTR_FECHA_EMISION, date('Y-m-d'), Criterio::MENORIGUAL, 'fecha_hasta', Criterio::_AND);
$criterio_recibo->addFinSubconsulta();

$criterio_recibo->addTabla(PdeRecibo::GEN_TABLA);
$criterio_recibo->addRealJoin(PdeReciboTipoEstado::GEN_TABLA, PdeReciboTipoEstado::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio_recibo->setCriteriosInicial();


$paginador = new Paginador(PdeComprobante::getSesPagCantidad(), PdeComprobante::getSesPag());
$paginador = null;


// Columna 1
$pde_facturas = PdeFactura::getPdeFacturas($paginador, $criterio_factura);
$pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitos($paginador, $criterio_nota_debito);

// Columna 2
$pde_nota_creditos = PdeNotaCredito::getPdeNotaCreditos($paginador, $criterio_nota_credito);
$pde_recibos = PdeRecibo::getPdeRecibos($paginador, $criterio_recibo);

//Gral::prr($pde_facturas);
//Gral::prr($pde_nota_debitos);
//Gral::prr($pde_nota_creditos);
//Gral::prr($pde_recibos);

$prv_proveedor_id = Gral::getSes(PdeComprobante::SES_PROVEEDOR_SELECCIONADO);
if ($prv_proveedor_id != '') {
    $prv_proveedor_seleccionado = PrvProveedor::getOxId($prv_proveedor_id);
}

$fecha_desde = $criterio_factura->getValorDeCampoXPos('fecha_desde');
$fecha_hasta = $criterio_factura->getValorDeCampoXPos('fecha_hasta');
$filtro_imputable = $criterio_factura->getValorDeCampo('vta_factura_tipo_estado.imputable');

if ($prv_proveedor_seleccionado) {
    $fecha_hasta_saldo = Date::sumarDias($fecha_desde, -1);
    $importe_total_saldo_inicial_en_fecha = $prv_proveedor_seleccionado->getSaldoDeCuentaEnFechaImporte($gral_empresa_id, $fecha_hasta_saldo);
}

$arr_comprobante_totales = PdeComprobante::getArrTotales($pde_facturas, $pde_nota_debitos, $pde_nota_creditos, $pde_recibos, $importe_total_saldo_inicial_en_fecha);
//Gral::prr($arr_comprobante_totales);

include 'pde_comprobante_gestion_datos.php';
?>

<script>
    setInit();
    setInitPdeComprobanteGestion();
</script>