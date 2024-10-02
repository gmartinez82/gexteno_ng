<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0, Gral::TIPO_INTEGER);

$chk_pde_comprobantes = Gral::getVars(Gral::VARS_POST, "chk_pde_comprobante", 0);
$txt_pde_comprobante_importe_saldos = Gral::getVars(Gral::VARS_POST, "txt_pde_comprobante_importe_saldo", 0);
$txt_tributo_importes = Gral::getVars(Gral::VARS_POST, "txt_tributo_importe", 0);

$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", 0);

$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

$importe_total = 0;

$arr['COMPROBANTE_SELECCIONADO'] = false;

if (is_array($chk_pde_comprobantes) && count($chk_pde_comprobantes) > 0) {
    foreach ($chk_pde_comprobantes as $i => $chk_pde_comprobante) {
        $arr['COMPROBANTE_SELECCIONADO'] = true;

        $txt_pde_comprobante_importe_saldo = $txt_pde_comprobante_importe_saldos[$i];
        $txt_pde_comprobante_importe_saldo = Gral::getImporteDesdePriceFormatToDB($txt_pde_comprobante_importe_saldo);

        //Gral::pr($txt_pde_comprobante_importe_saldo);

        $importe_comprobantes_total_saldo += $txt_pde_comprobante_importe_saldo;
    }
    
    $arr['FORMA_PAGO_TOTAL_COMPROBANTES'] = $importe_comprobantes_total_saldo;
    $arr['FORMA_PAGO_TOTAL_COMPROBANTES_FORMATEADO'] = Gral::_echoImp($importe_comprobantes_total_saldo, false, true);
} else {
    $arr['FORMA_PAGO_TOTAL_COMPROBANTES'] = 0;
    $arr['FORMA_PAGO_TOTAL_COMPROBANTES_FORMATEADO'] = Gral::_echoImp(0, false, true);
}

foreach ($txt_tributo_importes as $i => $txt_tributo_importe){
    $txt_tributo_importe = Gral::getImporteDesdePriceFormatToDB($txt_tributo_importe);
    $importe_tributo_total += $txt_tributo_importe;
}

$arr['FORMA_PAGO_TOTAL_RETENCIONES'] = $importe_tributo_total;
$arr['FORMA_PAGO_TOTAL_RETENCIONES_FORMATEADO'] = Gral::_echoImp($importe_tributo_total, false, true);




if (is_array($txt_importe_unitarios) && count($txt_importe_unitarios) > 0){
    foreach ($txt_importe_unitarios as $i => $txt_importe_unitario) {
        $arr['COMPROBANTE_SELECCIONADO'] = true;

        $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);

        //Gral::pr($txt_pde_comprobante_importe_saldo);

        $importe_total += $txt_importe_unitario;
    }

    $importe_total_saldo = $importe_comprobantes_total_saldo - $importe_total - $importe_tributo_total;
    //$saldo_importe = ($total_importe_pago + $total_importe_retenciones) - $total_importe_comprobantes_afectados;
    
    $arr['FORMA_PAGO_TOTAL'] = $importe_total;
    $arr['FORMA_PAGO_TOTAL_FORMATEADO'] = Gral::_echoImp($importe_total, false, true);

    $arr['FORMA_PAGO_TOTAL_SALDO'] = $importe_total_saldo;
    $arr['FORMA_PAGO_TOTAL_SALDO_FORMATEADO'] = Gral::_echoImp($importe_total_saldo, false, true);
} else {
    $importe_total_saldo = $importe_comprobantes_total_saldo - $importe_tributo_total;
    
    $arr['FORMA_PAGO_TOTAL'] = 0;
    $arr['FORMA_PAGO_TOTAL_FORMATEADO'] = Gral::_echoImp(0, false, true);

    $arr['FORMA_PAGO_TOTAL_SALDO'] = $importe_total_saldo - $importe_tributo_total;
    $arr['FORMA_PAGO_TOTAL_SALDO_FORMATEADO'] = Gral::_echoImp($importe_total_saldo, false, true);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>