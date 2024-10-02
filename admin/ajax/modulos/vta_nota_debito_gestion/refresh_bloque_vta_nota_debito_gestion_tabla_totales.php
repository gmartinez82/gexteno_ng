<?php
include_once '_autoload.php';

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

$vta_nota_debito = new VtaNotaDebito();

// se obtienen variables si es factura de orden-venta
$vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_orden_venta", null);
$vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_orden_venta_cantidad", null);

// se obtienen variables si es factura de item
$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_vta_nota_debito_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_nota_debito_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);
$cmb_aplica_percepcion_iibbs = Gral::getVars(Gral::VARS_POST, "cmb_aplica_percepcion_iibb", null);

$vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);

$chk_tributo_omitir_minimo = Gral::getVars(Gral::VARS_POST, "chk_tributo_omitir_minimo", 0);

$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);
$vta_nota_debito->setCliClienteId($cli_cliente_id);

$gral_condicion_iva = VtaNotaDebito::getDeterminacionGralCondicionIva($cli_cliente_id);
if($gral_condicion_iva){
    $vta_nota_debito->setGralCondicionIvaId($gral_condicion_iva->getId());
}

$vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);
if($vta_punto_venta){
    $vta_nota_debito->setVtaPuntoVentaId($vta_punto_venta->getId());    
}

include "bloque_vta_nota_debito_listado_items_tabla_totales.php";
