<?php

include "_autoload.php";

$vta_nota_debito_id = Gral::getVars(Gral::VARS_POST, "vta_nota_debito_id", 0);

$vta_tipo_nota_debito_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_tipo_nota_debito_id", 0);
$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cmb_cli_cliente_id", 0);
$txt_fecha = Gral::getVars(1, "txt_fecha", '');
$cmb_gral_mes_id = Gral::getVars(1, "cmb_gral_mes_id", 0);
$cmb_anio = Gral::getVars(1, "cmb_anio", 0);
$txt_nro_timbrado = Gral::getVars(Gral::VARS_POST, "txt_nro_timbrado", "", Gral::TIPO_STRING);
$txt_nro_punto_venta = Gral::getVars(1, "txt_nro_punto_venta");
$txt_nro_comprobante = Gral::getVars(1, "txt_nro_comprobante");
$txt_fecha_vencimiento = Gral::getVars(Gral::VARS_POST, "txt_fecha_vencimiento", '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);

// se realizan los controles de datos
$arr["error"] = false;

if ($vta_tipo_nota_debito_id == 0) {
    $arr["cmb_vta_tipo_nota_debito_id"] = Lang::_lang("Debe seleccionar un Tipo de ND", true);
    $arr["error"] = true;
}
if ($cli_cliente_id == 0) {
    $arr["cmb_cli_cliente_id"] = Lang::_lang("Debe indicar un cliente", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_fecha)) {
    $arr["txt_fecha"] = Lang::_lang("Debe ingresar una fecha valida", true);
    $arr["error"] = true;
} else {
    $txt_fecha = Gral::getFechaToDB($txt_fecha);
    if (!Ctrl::esFechaValida($txt_fecha)) {
        $arr["txt_fecha"] = Lang::_lang("Debe ingresar una fecha valida", true);
        $arr["error"] = true;
    }
}
if (Ctrl::esVacio($txt_nro_timbrado)) {
    $arr["txt_nro_timbrado"] = Lang::_lang("Debe ingresar un numero de timbrado", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_nro_punto_venta)) {
    $arr["txt_nro_punto_venta"] = Lang::_lang("Debe ingresar un punto de venta valido", true);
    $arr["error"] = true;
} else {
    if (strlen($txt_nro_punto_venta) != DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA) {
        $arr["txt_nro_punto_venta"] = Lang::_lang("Debe ingresar un punto de venta valido, por ejemplo 001-001", true);
        $arr["error"] = true;
    }
}
if (!Ctrl::esDigito($txt_nro_comprobante)) {
    $arr["txt_nro_comprobante"] = Lang::_lang("Debe ingresar un nro de comprobante valido", true);
    $arr["error"] = true;
} else {
    if (strlen($txt_nro_comprobante) != DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE) {
        $arr["txt_nro_comprobante"] = Lang::_lang("Debe ingresar un nro de comprobante valido, por ejemplo 00154578", true);
        $arr["error"] = true;
    }
}
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
        $arr["txt_fecha_vencimiento"] = Lang::_lang("No puede ser menor a la fecha de emision", true);
        $arr["error"] = true;
    }
}
if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    // se modifican los datos del comprobante
    $vta_nota_debito->setModificarDatosComprobante($vta_tipo_nota_debito_id, $cli_cliente_id, $txt_fecha, $cmb_gral_mes_id, $cmb_anio, $txt_nro_timbrado, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_fecha_vencimiento, $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>