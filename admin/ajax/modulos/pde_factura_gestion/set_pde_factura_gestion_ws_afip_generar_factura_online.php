<?php

include "_autoload.php";

//$ws_fe_param_tipo_concepto_id = Gral::getVars(Gral::VARS_POST, "cmb_ws_fe_param_tipo_concepto_id", 0);
//$ws_fe_param_punto_venta_id = Gral::getVars(Gral::VARS_POST, "ws_fe_param_punto_venta_id", 0);

$pde_factura_id = Gral::getVars(Gral::VARS_POST, "pde_factura_id", 0);
$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$pde_centro_pedido_id = Gral::getVars(Gral::VARS_POST, "cmb_pde_centro_pedido_id", 0);
$pde_tipo_factura_id = Gral::getVars(Gral::VARS_POST, "cmb_pde_tipo_factura_id", 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}
if ($gral_empresa_id == 0) {
    $arr["cmb_gral_empresa_id"] = Lang::_lang("Debe seleccionar una Empresa", true);
    $arr["error"] = true;
}
if ($pde_tipo_factura_id == 0) {
    $arr["cmb_pde_tipo_factura_id"] = Lang::_lang("Debe seleccionar un Tipo de Factura", true);
    $arr["error"] = true;
}
//if ($ws_fe_param_tipo_concepto_id == 0) {
//    $arr["cmb_ws_fe_param_tipo_concepto_id"] = Lang::_lang("Debe seleccionar un Tipo de Concepto. ", true);
//    $arr["error"] = true;
//}
if ($pde_centro_pedido_id == 0) {
    $arr["cmb_pde_centro_pedido_id"] = Lang::_lang("Debe seleccionar un Centro de Pedido", true);
    $arr["error"] = true;
}


if (!$arr["error"]) {
    $ws_fe_param_tipo_concepto_id = 1;
    $ws_fe_afip_tipo_documento = 80;
    
    $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitud($pde_factura_id, $gral_empresa_id, $pde_centro_pedido_id, $pde_tipo_factura_id, $ws_fe_param_tipo_concepto_id, $ws_fe_afip_tipo_documento, $txa_observacion);

    if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
        $arr["error_general"] = Lang::_lang("Error al enviar factura electronica.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>