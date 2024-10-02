<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$key = Gral::getVars(Gral::VARS_POST, "key", 0);
$importe_total = Gral::getVars(Gral::VARS_POST, "importe_total", 0);
$gral_tipo_iva_id = Gral::getVars(Gral::VARS_POST, "gral_tipo_iva_id", 0);
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);

$importe_total = Gral::getImporteDesdePriceFormatToDB($importe_total);

// se realizan los controles de datos
$arr["error"] = false;

if ($gral_tipo_iva_id == 0) {
    $arr["cmb_gral_tipo_iva_id_" . $key] = Lang::_lang("Debe ingresar el tipo de IVA. ", true);
    $arr["error"] = true;
}
if ($key == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error duranre el proceso. ", true);
    $arr["error"] = true;
}
if ($prv_proveedor_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error duranre el proceso. ", true);
    $arr["error"] = true;
}
if ($importe_total == 0) {
    $arr["txt_importe_total_" . $key] = Lang::_lang("Debe ingresar un valor distinto de 0. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $gral_tipo_iva = GralTipoIva::getOxId($gral_tipo_iva_id);
    $alicuota_iva_porcentual = $gral_tipo_iva->getValorIva();
    $alicuota_iva_decimal = $alicuota_iva_porcentual / 100;
    
    $importe_unitario = $importe_total / (1 + $alicuota_iva_decimal);
    $importe_iva = $importe_unitario * $alicuota_iva_decimal;
    
    $importe_unitario = Gral::getImporteDesdeDbToPriceFormat($importe_unitario);
    $importe_iva = Gral::getImporteDesdeDbToPriceFormat($importe_iva);
    
    $arr["importe_unitario"] = round($importe_unitario, 2);
    $arr["importe_iva"] = round($importe_iva, 2);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>