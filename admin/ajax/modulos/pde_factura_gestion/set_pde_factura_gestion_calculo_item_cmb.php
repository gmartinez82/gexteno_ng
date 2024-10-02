<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$key = Gral::getVars(Gral::VARS_POST, "key", 0);
$importe_unitario = Gral::getVars(Gral::VARS_POST, "importe_unitario", 0);
$importe_total = Gral::getVars(Gral::VARS_POST, "importe_total", 0);
$gral_tipo_iva_id = Gral::getVars(Gral::VARS_POST, "gral_tipo_iva_id", 0);
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);

$importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);
$importe_total = Gral::getImporteDesdePriceFormatToDB($importe_total);

// se realizan los controles de datos
$arr["error"] = false;

if ($key == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error duranre el proceso. ", true);
    $arr["error"] = true;
}

// Importe Total
if ($importe_total > 0) {
    $gral_tipo_iva = GralTipoIva::getOxId($gral_tipo_iva_id);
    $alicuota_iva_porcentual = $gral_tipo_iva->getValorIva();
    $alicuota_iva_decimal = $alicuota_iva_porcentual / 100;

    $importe_unitario = $importe_total / (1 + $alicuota_iva_decimal);
    $importe_iva = $importe_unitario * $alicuota_iva_decimal;
    $importe_tributo = $importe_unitario * $alicuota_tributo_decimal_total;
    
    $importe_unitario = Gral::getImporteDesdeDbToPriceFormat($importe_unitario);
    $importe_iva = Gral::getImporteDesdeDbToPriceFormat($importe_iva);
    $importe_total = Gral::getImporteDesdeDbToPriceFormat($importe_total);
    
    $arr["importe_unitario"] = round($importe_unitario, 2);
    $arr["importe_iva"] = round($importe_iva, 2);
    $arr["importe_total"] = round($importe_total, 2);
    
} else { // Importe unitario
    
    $gral_tipo_iva = GralTipoIva::getOxId($gral_tipo_iva_id);
    $alicuota_iva_porcentual = $gral_tipo_iva->getValorIva();
    $alicuota_iva_decimal = $alicuota_iva_porcentual / 100;

    $importe_iva = $importe_unitario * $alicuota_iva_decimal;
    $importe_total = $importe_unitario + $importe_iva;
    
    $importe_unitario = Gral::getImporteDesdeDbToPriceFormat($importe_unitario);
    $importe_iva = Gral::getImporteDesdeDbToPriceFormat($importe_iva);
    $importe_total = Gral::getImporteDesdeDbToPriceFormat($importe_total);
    
    $arr["importe_iva"] = round($importe_iva, 2);
    $arr["importe_unitario"] = round($importe_unitario, 2);
    $arr["importe_total"] = round($importe_total, 2);
}


// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>