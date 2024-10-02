<?php

include "_autoload.php";

$vta_factura_id = Gral::getVars(Gral::VARS_POST, "vta_factura_id", 0);

$cmb_gral_fp_cuota_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_cuota_id", null);
$cmb_gral_escenario_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_escenario_id", null);
$vta_preventista_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_preventista_id", null);
$vta_comprador_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_comprador_id", null);
$vta_vendedor_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_vendedor_id", null);
$txt_nro_timbrado = Gral::getVars(Gral::VARS_POST, "txt_nro_timbrado", "", Gral::TIPO_STRING);
$txt_fecha_vencimiento = Gral::getVars(Gral::VARS_POST, "txt_fecha_vencimiento", '');
$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica", '');
$txt_nro_sucursal = Gral::getVars(1, "txt_nro_sucursal");
$txt_nro_punto_venta = Gral::getVars(1, "txt_nro_punto_venta");
$txt_nro_comprobante = Gral::getVars(1, "txt_nro_comprobante");
$txt_cae = Gral::getVars(1, "txt_cae");
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$vta_factura = VtaFactura::getOxId($vta_factura_id);

// se realizan los controles de datos
$arr["error"] = false;

if ($cmb_gral_fp_cuota_id == 0) {
    $arr["cmb_gral_fp_cuota_id"] = Lang::_lang("Debe seleccionar un cuota", true);
    $arr["error"] = true;
}

if ($cmb_gral_escenario_id == 0) {
    $arr["cmb_gral_escenario_id"] = Lang::_lang("Debe seleccionar un Escenario", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_nro_timbrado)) {
    $arr["txt_nro_timbrado"] = Lang::_lang("Debe ingresar un numero de timbrado", true);
    $arr["error"] = true;
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
        $arr["txt_fecha_vencimiento"] = Lang::_lang("Debe ingresar una rango valido", true);
        $arr["error"] = true;
    }
}

if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_MODIFICAR_NRO_COMPROBANTE')) {
    if (!Ctrl::esDigito($txt_nro_sucursal)) {
        $arr["txt_nro_sucursal"] = Lang::_lang("Debe ingresar un numero de sucursal", true);
        $arr["error"] = true;
    } else {
        if (strlen($txt_nro_sucursal) != DbConfig::VARS_CANTIDAD_NRO_SUCURSAL) {
            $arr["txt_nro_sucursal"] = Lang::_lang("Debe ingresar un numero de sucursal valido, por ejemplo 001", true);
            $arr["error"] = true;
        }
    }    
    if (!Ctrl::esDigito($txt_nro_punto_venta)) {
        $arr["txt_nro_punto_venta"] = Lang::_lang("Debe ingresar un punto de venta valido", true);
        $arr["error"] = true;
    } else {
        if (strlen($txt_nro_punto_venta) != DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE) {
            $arr["txt_nro_punto_venta"] = Lang::_lang("Debe ingresar un punto de venta valido, por ejemplo 001", true);
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
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    // se modifican los datos del comprobante
    $vta_factura->setModificarDatosComprobante($cmb_gral_fp_cuota_id, $cmb_gral_escenario_id, $vta_preventista_id, $vta_comprador_id, $vta_vendedor_id, $txt_nro_timbrado, $txt_fecha_vencimiento, $txt_nro_sucursal, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_cae, $txa_nota_publica, $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>