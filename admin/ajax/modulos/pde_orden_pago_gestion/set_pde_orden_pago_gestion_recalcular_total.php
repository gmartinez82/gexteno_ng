<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

$txt_comprobante_subtotal = Gral::getVars(Gral::VARS_POST, "txt_comprobante_subtotal", 0);
$txt_comprobante_ivas = Gral::getVars(Gral::VARS_POST, "txt_comprobante_iva", 0);
$txt_comprobante_tributos = Gral::getVars(Gral::VARS_POST, "txt_comprobante_tributo", 0);

$importe_total = 0;

// se agrega el subtotal
$importe_total+= $txt_comprobante_subtotal;

// se agregan los iva
foreach ($txt_comprobante_ivas as $txt_comprobante_iva) {
    $importe_total+= $txt_comprobante_iva;
}

// se agregan los tributos
foreach ($txt_comprobante_tributos as $txt_comprobante_tributo) {

    $txt_comprobante_tributo = Gral::getImporteDesdePriceFormatToDB($txt_comprobante_tributo);

    $importe_total+= $txt_comprobante_tributo;
}

$arr['COMPROBANTE_TOTAL'] = $importe_total;
$arr['COMPROBANTE_TOTAL_FORMATEADO'] = Gral::_echoImp($importe_total, false, true);

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>