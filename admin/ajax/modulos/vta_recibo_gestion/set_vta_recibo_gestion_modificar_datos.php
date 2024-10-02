<?php

include "_autoload.php";

$vta_recibo_id = Gral::getVars(Gral::VARS_POST, "vta_recibo_id", 0);

$cmb_vta_preventista_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_preventista_id", null);
$cmb_vta_recibo_condicion_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_recibo_condicion_pago_id", 0);
$cmb_vta_recibo_tipo_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_recibo_tipo_pago_id", 0);

$vta_tipo_recibo_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_tipo_recibo_id", 0);
$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cmb_cli_cliente_id", 0);
$txt_fecha = Gral::getVars(1, "txt_fecha", '');
$txt_codigo_op_cliente = Gral::getVars(1, "txt_codigo_op_cliente", '');
$txt_nro_punto_venta = Gral::getVars(1, "txt_nro_punto_venta");
$txt_nro_comprobante = Gral::getVars(1, "txt_nro_comprobante");

$txa_nota_interna = Gral::getVars(Gral::VARS_POST, "txa_nota_interna", '');
$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica", '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);

// se realizan los controles de datos
$arr["error"] = false;

if ($vta_tipo_recibo_id == 0) {
    $arr["cmb_vta_tipo_recibo_id"] = Lang::_lang("Debe seleccionar un Tipo de Recibo", true);
    $arr["error"] = true;
}
if ($cmb_vta_recibo_condicion_pago_id == 0) {
    $arr["cmb_vta_recibo_condicion_pago_id"] = Lang::_lang("Debe seleccionar una condicion de pago", true);
    $arr["error"] = true;
}
if ($cmb_vta_recibo_tipo_pago_id == 0) {
    $arr["cmb_vta_recibo_tipo_pago_id"] = Lang::_lang("Debe seleccionar un tipo de pago", true);
    $arr["error"] = true;
}
if ($cli_cliente_id == 0) {
    //$arr["cmb_cli_cliente_id"] = Lang::_lang("Debe indicar un cliente", true);
    //$arr["error"] = true;
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

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    // se modifican los datos del comprobante
    $vta_recibo->setModificarDatosComprobante($vta_tipo_recibo_id, $cmb_vta_preventista_id, $cmb_vta_recibo_condicion_pago_id, $cmb_vta_recibo_tipo_pago_id, $cli_cliente_id, $txt_fecha, $txt_codigo_op_cliente, $txa_nota_interna, $txa_nota_publica, $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>