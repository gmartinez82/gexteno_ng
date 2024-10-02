<?php

include "_autoload.php";

//$ws_fe_param_tipo_concepto_id = Gral::getVars(Gral::VARS_POST, "cmb_ws_fe_param_tipo_concepto_id", 0);
//$ws_fe_param_punto_venta_id = Gral::getVars(Gral::VARS_POST, "ws_fe_param_punto_venta_id", 0);

$vta_factura_id = Gral::getVars(Gral::VARS_POST, "vta_factura_id", 0);
$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);
$vta_tipo_factura_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_tipo_factura_id", 0);

$txt_persona_descripcion = Gral::getVars(Gral::VARS_POST, "txt_persona_descripcion", '');
$cmb_gral_tipo_documento_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_documento_id", 0);
$txt_persona_documento = Gral::getVars(Gral::VARS_POST, "txt_persona_documento", '');
$txt_persona_email = Gral::getVars(Gral::VARS_POST, "txt_persona_email", '');

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$vta_factura = VtaFactura::getOxId($vta_factura_id);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txt_persona_descripcion)) {
    $arr["txt_persona_descripcion"] = Lang::_lang("Debe indicar una persona descripcion", true);
    $arr["error"] = true;
}
if ($cmb_gral_tipo_documento_id == 0) {
    $arr["cmb_gral_tipo_documento_id"] = Lang::_lang("Debe indicar un tipo de documento", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_persona_documento)) {
    $arr["txt_persona_documento"] = Lang::_lang("Debe indicar un documento de la persona", true);
    $arr["error"] = true;
}
if (!Ctrl::esVacio($txt_persona_email)) {
    if (!Ctrl::esEmail($txt_persona_email)) {
        $arr["txt_persona_email"] = Lang::_lang("Debe indicar un email valido", true);
        $arr["error"] = true;
    }
}
if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}


if (!$arr["error"]) {
    $ws_fe_param_tipo_concepto_id = 1;
    $ws_fe_afip_tipo_documento = 80;
    
    // -----------------------------------------------------------------------------
    // se actualizan valores del comprobante
    // -----------------------------------------------------------------------------
    $vta_factura->setPersonaDescripcion($txt_persona_descripcion);
    if ($cmb_gral_tipo_documento_id) {
        $vta_factura->setGralTipoDocumentoId($cmb_gral_tipo_documento_id);
    }
    $vta_factura->setPersonaDocumento($txt_persona_documento);
    $vta_factura->setPersonaEmail($txt_persona_email);
    
    $vta_factura->setFechaEmision(Gral::getFechaActual());
    $vta_factura->setFechaVencimiento(Gral::getFechaActual());

    $gral_mes = GralMes::getOxCodigoNumero(date('m'));
    if ($gral_mes) {
        $vta_factura->setGralMesId($gral_mes->getId());
    }
    $vta_factura->setAnio(date('Y'));
    $vta_factura->save();

    /*
    $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitud($vta_factura->getId(), $vta_factura->getGralEmpresaId(), $vta_factura->getVtaPuntoVentaId(), $vta_factura->getVtaTipoFacturaId(), $ws_fe_param_tipo_concepto_id, $ws_fe_afip_tipo_documento, 'Reintento Manual: '.$txa_observacion);

    if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
        $arr["error_general"] = Lang::_lang("Error al enviar factura electronica.", true);
        $arr["error"] = true;
    }
    */
    
    // -------------------------------------------------------------------------
    // Se genera DE e intenta autorizar
    // -------------------------------------------------------------------------
    $eku_de = $vta_factura->setAutorizarDE_SIFEN();
    $eku_de_ope_tipo_estado = $eku_de->getEkuDeOpeTipoEstado();
    //$eku_de_arsch01_resp = $eku_de->getEkuDeArsch01Resp();
    
    if(!$eku_de_ope_tipo_estado->getAprobado()){
        $arr["error_general"] = $eku_de->getDescripcionCompleta();
        $arr["error"] = true;
    }
    
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>