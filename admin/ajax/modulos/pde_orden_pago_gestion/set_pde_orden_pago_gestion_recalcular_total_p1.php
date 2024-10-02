<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0, Gral::TIPO_INTEGER);

$chk_pde_comprobantes = Gral::getVars(Gral::VARS_POST, "chk_pde_comprobante", 0);
$txt_pde_comprobante_importe_saldos = Gral::getVars(Gral::VARS_POST, "txt_pde_comprobante_importe_saldo", 0);
$txt_pde_comprobante_porcentaje_imponible_decimals = Gral::getVars(Gral::VARS_POST, "txt_pde_comprobante_porcentaje_imponible_decimal", 0);

$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

$pde_orden_pago = new PdeOrdenPago();
$pde_orden_pago->setPrvProveedorId($prv_proveedor->getId());

$importe_total = 0;

$arr['COMPROBANTE_SELECCIONADO'] = false;

// se agregan los iva
if (is_array($chk_pde_comprobantes) && count($chk_pde_comprobantes) > 0) {
    foreach ($chk_pde_comprobantes as $i => $chk_pde_comprobante) {
        $arr['COMPROBANTE_SELECCIONADO'] = true;

        $txt_pde_comprobante_porcentaje_imponible_decimal = $txt_pde_comprobante_porcentaje_imponible_decimals[$i];

        $txt_pde_comprobante_importe_saldo = $txt_pde_comprobante_importe_saldos[$i];
        $txt_pde_comprobante_importe_saldo = Gral::getImporteDesdePriceFormatToDB($txt_pde_comprobante_importe_saldo);

        //Gral::pr($txt_pde_comprobante_importe_saldo);

        $importe_imponible = Gral::rnd(($txt_pde_comprobante_importe_saldo * $txt_pde_comprobante_porcentaje_imponible_decimal), 2);

        $importe_comprobantes_total_saldo += $txt_pde_comprobante_importe_saldo;
        $importe_comprobantes_total_importe_imponible += $importe_imponible;
    }

    $arr['COMPROBANTE_IMPORTE_IMPONIBLE'][$i] = $importe_imponible;
    $arr['COMPROBANTE_IMPORTE_IMPONIBLE_FORMATEADO'][$i] = Gral::_echoImp($importe_imponible, false, true);

    $arr['COMPROBANTE_TOTAL_SALDO'] = $importe_comprobantes_total_saldo;
    $arr['COMPROBANTE_TOTAL_SALDO_FORMATEADO'] = Gral::_echoImp($importe_comprobantes_total_saldo, false, true);

    $arr['COMPROBANTE_TOTAL_IMPORTE_IMPONIBLE'] = $importe_comprobantes_total_importe_imponible;
    $arr['COMPROBANTE_TOTAL_IMPORTE_IMPONIBLE_FORMATEADO'] = Gral::_echoImp($importe_comprobantes_total_importe_imponible, false, true);
} else {
    $arr['COMPROBANTE_TOTAL_SALDO'] = 0;
    $arr['COMPROBANTE_TOTAL_SALDO_FORMATEADO'] = Gral::_echoImp(0, false, true);

    $arr['COMPROBANTE_TOTAL_IMPORTE_IMPONIBLE'] = 0;
    $arr['COMPROBANTE_TOTAL_IMPORTE_IMPONIBLE_FORMATEADO'] = Gral::_echoImp(0, false, true);
    
    $arr['COMPROBANTE_IMPORTE_IMPONIBLE'] = array();
}

// -----------------------------------------------------------------------------
// se calculan tributos de retencion
// -----------------------------------------------------------------------------
foreach (PdeTributo::getPdeTributosRetencion() as $pde_tributo) {

    $arr_pde_tributo_aplica = $pde_tributo->getPdeTributoAplica($pde_orden_pago, $importe_comprobantes_total_importe_imponible, $omitir_minimo = false);
    //Gral::prr($arr_pde_tributo_aplica);

    if ($arr_pde_tributo_aplica['aplica']) {

        if ($arr_pde_tributo_aplica['supera_minimo']) {

            if (!$arr_pde_tributo_aplica['exento']) {
                $alicuota_decimal = $pde_tributo->getAlicuotaDecimal();
                $arr['RETENCIONES'][$pde_tributo->getId()]['IMPORTE'] = Gral::rnd($importe_comprobantes_total_importe_imponible * $alicuota_decimal, 2);
            } else {
                $arr['RETENCIONES'][$pde_tributo->getId()]['IMPORTE'] = 0;
                $arr['RETENCIONES'][$pde_tributo->getId()]['MENSAJE'] = 'Exencion Activa del Proveedor';
            }
        } else {
            $arr['RETENCIONES'][$pde_tributo->getId()]['IMPORTE'] = 0;
            $arr['RETENCIONES'][$pde_tributo->getId()]['MENSAJE'] = 'No supera el minimo de '.Gral::_echoImp($arr_pde_tributo_aplica['minimo'], false, true);
        }
    } else {
        $arr['RETENCIONES'][$pde_tributo->getId()]['IMPORTE'] = 0;
    }
}


// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>