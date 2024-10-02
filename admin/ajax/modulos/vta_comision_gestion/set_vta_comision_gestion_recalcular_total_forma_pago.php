<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

$chk_vta_comprobantes = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante", 0);
$hdn_importe_comisions = Gral::getVars(Gral::VARS_POST, "hdn_importe_comision", 0);

$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", 0);


$importe_total = 0;

$arr['COMPROBANTE_SELECCIONADO'] = false;

if (is_array($chk_vta_comprobantes) && count($chk_vta_comprobantes) > 0) {
    foreach ($chk_vta_comprobantes as $i => $chk_vta_comprobante) {
        $arr['COMPROBANTE_SELECCIONADO'] = true;

        $txt_vta_comprobante_importe_saldo = $hdn_importe_comisions[$i];
        //$txt_vta_comprobante_importe_saldo = Gral::getImporteDesdePriceFormatToDB($txt_vta_comprobante_importe_saldo);

        //Gral::pr($txt_vta_comprobante_importe_saldo);

        $importe_comprobantes_total_saldo += $txt_vta_comprobante_importe_saldo;
    }

    $arr['FORMA_PAGO_TOTAL_COMPROBANTES'] = $importe_comprobantes_total_saldo;
    $arr['FORMA_PAGO_TOTAL_COMPROBANTES_FORMATEADO'] = Gral::_echoImp($importe_comprobantes_total_saldo, false, true);
} else {
    $arr['FORMA_PAGO_TOTAL_COMPROBANTES'] = 0;
    $arr['FORMA_PAGO_TOTAL_COMPROBANTES_FORMATEADO'] = Gral::_echoImp(0, false, true);
}

if (is_array($txt_importe_unitarios) && count($txt_importe_unitarios) > 0) {
    foreach ($txt_importe_unitarios as $i => $txt_importe_unitario) {
        $arr['COMPROBANTE_SELECCIONADO'] = true;

        $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);

        //Gral::pr($txt_vta_comprobante_importe_saldo);

        $importe_total += $txt_importe_unitario;
    }
    $importe_total_saldo = $importe_comprobantes_total_saldo - $importe_total;

    $arr['FORMA_PAGO_TOTAL'] = $importe_total;
    $arr['FORMA_PAGO_TOTAL_FORMATEADO'] = Gral::_echoImp($importe_total, false, true);

    $arr['FORMA_PAGO_TOTAL_SALDO'] = $importe_total_saldo;
    $arr['FORMA_PAGO_TOTAL_SALDO_FORMATEADO'] = Gral::_echoImp($importe_total_saldo, false, true);
} else {
    $arr['FORMA_PAGO_TOTAL'] = 0;
    $arr['FORMA_PAGO_TOTAL_FORMATEADO'] = Gral::_echoImp(0, false, true);

    $arr['FORMA_PAGO_TOTAL_SALDO'] = $importe_comprobantes_total_saldo;
    $arr['FORMA_PAGO_TOTAL_SALDO_FORMATEADO'] = Gral::_echoImp($importe_comprobantes_total_saldo, false, true);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>