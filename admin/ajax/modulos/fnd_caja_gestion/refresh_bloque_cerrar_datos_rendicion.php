<?php

include "_autoload.php";

$fnd_caja_id = Gral::getVars(Gral::VARS_POST, 'fnd_caja_id', 0, Gral::TIPO_INTEGER);
$fnd_caja = FndCaja::getOxId($fnd_caja_id);

$arr_resumen_caja = $fnd_caja->getArrResumenCaja();
//Gral::prr($arr_resumen_caja);

$importe_total_efectivo_en_caja = $arr_resumen_caja['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['importe'];

$txt_saldo_final = Gral::getVars(Gral::VARS_POST, 'txt_saldo_final', 0);
$txt_gral_billete_ids = Gral::getVars(Gral::VARS_POST, 'txt_gral_billete_id', 0);

$txt_saldo_final = Gral::getImporteDesdePriceFormatToDB($txt_saldo_final);

$importe_billetes = 0;

foreach ($txt_gral_billete_ids as $txt_gral_billete_id => $cantidad) {
    $gral_billete = GralBillete::getOxId($txt_gral_billete_id);

    $importe_total_billete = $gral_billete->getImporte() * $cantidad;
    $importe_billetes += $importe_total_billete;
}

// -----------------------------------------------------------------------------
// se calcula el importe a rendir en caja, restando el saldo que queda en caja
// -----------------------------------------------------------------------------
$importe_total_efectivo_en_caja_a_rendir = $importe_total_efectivo_en_caja - $txt_saldo_final;

// -----------------------------------------------------------------------------
// se calcula la diferencia real contra datos de caja
// -----------------------------------------------------------------------------
$importe_diferencia = $importe_billetes - $importe_total_efectivo_en_caja_a_rendir;
$importe_diferencia = round($importe_diferencia, 2);

include "bloque_cerrar_datos_rendicion.php";
?>