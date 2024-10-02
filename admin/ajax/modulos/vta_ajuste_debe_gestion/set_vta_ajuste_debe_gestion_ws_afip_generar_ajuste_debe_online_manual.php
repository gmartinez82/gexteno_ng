<?php

include "_autoload.php";

//$ws_fe_param_tipo_concepto_id = Gral::getVars(Gral::VARS_POST, "cmb_ws_fe_param_tipo_concepto_id", 0);
//$ws_fe_param_punto_venta_id = Gral::getVars(Gral::VARS_POST, "ws_fe_param_punto_venta_id", 0);

$vta_ajuste_debe_id = Gral::getVars(Gral::VARS_POST, "vta_ajuste_debe_id", 0);
$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);
$vta_tipo_ajuste_debe_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_tipo_ajuste_debe_id", 0);

$txt_persona_descripcion = Gral::getVars(Gral::VARS_POST, "txt_persona_descripcion", '');
$cmb_gral_tipo_documento_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_documento_id", 0);
$txt_persona_documento = Gral::getVars(Gral::VARS_POST, "txt_persona_documento", '');
$txt_persona_email = Gral::getVars(Gral::VARS_POST, "txt_persona_email", '');

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);
$vta_ajuste_debe_importe_total = $vta_ajuste_debe->getVtaAjusteDebeTotal();

// se inicializa variable de configuracion 
$cv_importe_minimo_exigencia_info_comprador_consumidor_final = ConfVariable::getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal();

// -----------------------------------------------------------------------------
// se setean los valores de las cajas de texto
// -----------------------------------------------------------------------------
$vta_ajuste_debe->setPersonaDescripcion($txt_persona_descripcion);
if ($cmb_gral_tipo_documento_id) {
    $vta_ajuste_debe->setGralTipoDocumentoId($cmb_gral_tipo_documento_id);
}
$vta_ajuste_debe->setPersonaDocumento($txt_persona_documento);
$vta_ajuste_debe->setPersonaEmail($txt_persona_email);
$vta_ajuste_debe->save();


// se realizan los controles de datos
$arr["error"] = false;

if ($vta_ajuste_debe_importe_total >= $cv_importe_minimo_exigencia_info_comprador_consumidor_final) {
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

if($vta_ajuste_debe->getCae() != ''){
    $arr["error_general"] = Lang::_lang("El comprobante ya obtuvo CAE y NUMERO de comprobante", true);
    $arr["error"] = true;
}


if (!$arr["error"]) {
    $ws_fe_param_tipo_concepto_id = 1;
    $ws_fe_afip_tipo_documento = 80;

    $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitud($vta_ajuste_debe->getId(), $vta_ajuste_debe->getGralEmpresaId(), $vta_ajuste_debe->getVtaPuntoVentaId(), $vta_ajuste_debe->getVtaTipoAjusteDebeId(), $ws_fe_param_tipo_concepto_id, $ws_fe_afip_tipo_documento, $observacion = 'Reintento manual');

    if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
        $arr["error_general"] = Lang::_lang("Error al enviar factura electronica.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>