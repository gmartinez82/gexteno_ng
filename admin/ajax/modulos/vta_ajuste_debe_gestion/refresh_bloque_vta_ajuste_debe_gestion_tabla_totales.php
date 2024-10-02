<?php
include_once '_autoload.php';

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

$vta_ajuste_debe = new VtaAjusteDebe();

// se obtienen variables si es factura de orden-venta
$vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_orden_venta", null);
$vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_orden_venta_cantidad", null);

// se obtienen variables si es factura de item
$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_vta_ajuste_debe_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_ajuste_debe_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);

$vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);

$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cmb_cli_cliente_id", 0);

$cli_cliente = CliCliente::getOxId($cli_cliente_id);
if($cli_cliente){
    $vta_ajuste_debe->setCliClienteId($cli_cliente->getId());
}else{
    foreach($vta_orden_venta_ids as $vta_orden_venta_id){
        $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
        $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
        $cli_cliente = $vta_presupuesto->getCliCliente();
        $cli_cliente_id = $cli_cliente->getId();
        
        if($cli_cliente_id == 'null'){
            $cli_cliente = false;
        }
    }
}

$gral_condicion_iva = VtaAjusteDebe::getDeterminacionGralCondicionIva($cli_cliente_id);
if($gral_condicion_iva){
    $vta_ajuste_debe->setGralCondicionIvaId($gral_condicion_iva->getId());
}

$vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);
if($vta_punto_venta){
    $vta_ajuste_debe->setVtaPuntoVentaId($vta_punto_venta->getId());    
}

include "bloque_vta_ajuste_debe_gestion_tabla_totales.php";
