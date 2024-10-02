<?php

include "_autoload.php";

$vta_ajuste_debe_id = Gral::getVars(Gral::VARS_POST, "vta_ajuste_debe_id", 0);

$vta_preventista_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_preventista_id", null);
$vta_comprador_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_comprador_id", null);
$vta_vendedor_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_vendedor_id", null);
$txt_fecha_vencimiento = Gral::getVars(Gral::VARS_POST, "txt_fecha_vencimiento", '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');
$cmb_porcentaje_iva = Gral::getVars(Gral::VARS_POST, "cmb_porcentaje_iva", -1);

$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txt_fecha_vencimiento)) {
    $txt_fecha_vencimiento = '1900-01-01';
    //$arr["txt_fecha_vencimiento"] = Lang::_lang("Debe ingresar una fecha", true);
    //$arr["error"] = true;
} else {
    $txt_fecha_vencimiento = Gral::getFechaToDB($txt_fecha_vencimiento);
    if (!Ctrl::esFechaValida($txt_fecha_vencimiento)) {
        $arr["txt_fecha_vencimiento"] = Lang::_lang("Debe ingresar una fecha valida", true);
        $arr["error"] = true;
    } elseif (!Date::esRangoValido($txt_fecha, $txt_fecha_vencimiento)) {
        $arr["txt_fecha_vencimiento"] = Lang::_lang("Debe ingresar una rango valido", true);
        $arr["error"] = true;
    }
}
if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}
if ($cmb_porcentaje_iva == -1) {
    $arr["cmb_porcentaje_iva"] = Lang::_lang("Debe indicar un porcentaje", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    // se modifican los datos del comprobante
    $vta_ajuste_debe->setModificarDatosComprobante($vta_preventista_id, $vta_comprador_id, $vta_vendedor_id, $txt_fecha_vencimiento, $cmb_porcentaje_iva, $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>