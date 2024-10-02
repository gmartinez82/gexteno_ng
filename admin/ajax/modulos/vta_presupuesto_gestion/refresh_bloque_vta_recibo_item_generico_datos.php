<?php
include_once '_autoload.php';
include_once Gral::getPathAbs() . "admin/control/init.php";

$gral_fp_cuota_id = Gral::getVars(Gral::VARS_GET, 'gral_fp_cuota_id', 0);
$vta_punto_venta_id = Gral::getVars(Gral::VARS_GET, 'vta_punto_venta_id', 0);
$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);
$porcentaje_iva = Gral::getVars(Gral::VARS_GET, 'porcentaje_iva', 100);
$origen = Gral::getVars(Gral::VARS_GET, 'origen', '');

$key = 1;

// --------------------------------------------------------
// se inicializan variables para vta recibo item generico
// --------------------------------------------------------
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$gral_fp_forma_pago_id = $vta_presupuesto->getGralFpFormaPagoId();
$gral_fp_cuota = GralFpCuota::getOxId($gral_fp_cuota_id);

// -----------------------------------------------------------------------------
// se mantiene la forma de pago preseteada
// -----------------------------------------------------------------------------
if($gral_fp_cuota){
    $gral_fp_cuota_id = $gral_fp_cuota->getId();
    $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
    $gral_fp_medio_pago_id = $gral_fp_medio_pago->getId();
    $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();
    $gral_fp_forma_pago_id = $gral_fp_forma_pago->getId();    
}

$importe_subtotal = $vta_presupuesto->getImporteTotalPresupuestoConDescuentoSinIva();

$cli_cliente = $vta_presupuesto->getCliCliente();
if ($cli_cliente->getId() != 'null') {
    $cli_cliente_id = $cli_cliente->getId();
    
    // -------------------------------------------------------------------------
    // se determina la forma de pago que corresponde al cliente, si lo tuviese
    // -------------------------------------------------------------------------    
    if (!$gral_fp_cuota) {
        $gral_fp_cuota = $cli_cliente->getGralFpCuotaXCliClienteGralFpCuota();
        if ($gral_fp_cuota) {
            $gral_fp_cuota_id = $gral_fp_cuota->getId();
            $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
            $gral_fp_medio_pago_id = $gral_fp_medio_pago->getId();
            $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();
            $gral_fp_forma_pago_id = $gral_fp_forma_pago->getId();
        }
    }
}

$vta_recibo_concepto = VtaReciboConcepto::getOxCodigo(VtaReciboConcepto::TIPO_COBRO_FACTURA);
$cmb_vta_recibo_item_generico_vta_recibo_concepto_id = ($vta_recibo_concepto) ? $vta_recibo_concepto->getId() : 0;
$txt_vta_recibo_item_generico_descripcion = 'Cobro de Venta Inmediata';
$txt_vta_recibo_item_generico_referencia = '';
$txt_vta_recibo_item_generico_importe_unitario = $vta_presupuesto->getImporteTotalPresupuestoConIva(false, 0, $porcentaje_iva);
$cmb_vta_recibo_item_generico_gral_fp_forma_pago_id = $gral_fp_forma_pago_id;


if ($vta_punto_venta_id) {
    if ($origen == 'venta_inmediata_contado') {
        // ---------------------------------------------------------------------
        // se deducen los tributos a aplicar
        // ---------------------------------------------------------------------
        $arr_vta_tributos_aplicados = VtaFactura::getTributosAAplicarDeduccion($cli_cliente_id, $vta_punto_venta_id, $vta_presupuesto->getImporteTotalPresupuestoConDescuentoSinIva());

        // ---------------------------------------------------------------------
        // se deduce si debe aplicarse un ajuste (FALTA TERMINAR)
        // ---------------------------------------------------------------------
        //$arr_ajustes_aplicados = array(
        //    array(
        //        'vta_recibo_item_generico_vta_recibo_concepto_id' => 1,
        //        'txt_vta_recibo_item_generico_descripcion' => 1,
        //        'txt_vta_recibo_item_generico_importe_unitario' => 1,
        //    )
        //);
    }
    
    $importe_tributo_total = 0;
    if($arr_vta_tributos_aplicados && is_array($arr_vta_tributos_aplicados)){
        foreach($arr_vta_tributos_aplicados as $arr_vta_tributo_aplicado){
            $importe_tributo = number_format($arr_vta_tributo_aplicado['txt_vta_recibo_item_generico_importe_unitario'], 2, ".", "");
            $importe_tributo_total+= $importe_tributo;
        }
    }

    include Gral::getPathAbs() . 'admin/ajax/modulos/vta_presupuesto_gestion/bloque_presupuesto_importe_totales.php';
    include Gral::getPathAbs() . 'admin/ajax/modulos/vta_recibo_item_generico/bloque_vta_recibo_item_generico_datos.php';
}
else {
    ?>
    <div class="mensaje ">Debe elegir un punto de venta</div>
    <?php
}
?>
<script>
    setInitVtaPresupuestoGestion();
    setInit();
</script>