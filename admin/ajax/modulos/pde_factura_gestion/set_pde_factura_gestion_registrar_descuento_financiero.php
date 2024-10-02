<?php

include "_autoload.php";

$pde_factura_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_factura", null);

$chk_generar_recibo = Gral::getVars(Gral::VARS_POST, "chk_generar_recibo", 0);
$txt_descuento_financiero = Gral::getVars(Gral::VARS_POST, "txt_descuento_financiero", 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

if ($txt_descuento_financiero == 0) {
    $arr["txt_descuento_financiero"] = Lang::_lang("Debe seleccionar un valor valido. ", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}
if (is_null($pde_factura_ids)) {
    $arr["error_general"] = Lang::_lang("Debe seleccionar una Factura.", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    
    PdeFactura::setRegistrarDescuentoFinanciero($pde_factura_ids, $txt_descuento_financiero, $chk_generar_recibo, $txa_observacion);

}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>