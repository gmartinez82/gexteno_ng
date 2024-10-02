<?php

include "_autoload.php";

//$ws_fe_param_tipo_concepto_id = Gral::getVars(Gral::VARS_POST, "cmb_ws_fe_param_tipo_concepto_id", 0);
//$ws_fe_param_punto_venta_id = Gral::getVars(Gral::VARS_POST, "ws_fe_param_punto_venta_id", 0);

$vta_nota_credito_id = Gral::getVars(Gral::VARS_POST, "vta_nota_credito_id", 0);
$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);
$vta_tipo_nota_credito_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_tipo_nota_credito_id", 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);
$vta_tipo_origen_nota_credito = $vta_nota_credito->getVtaTipoOrigenNotaCredito();

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}
if($vta_nota_credito->getCae() != ''){
    $arr["error_general"] = Lang::_lang("El comprobante ya obtuvo CAE y NUMERO de comprobante", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $ws_fe_param_tipo_concepto_id = 1;
    $ws_fe_afip_tipo_documento = 80;

    // -----------------------------------------------------------------------------
    // se actualizan valores del comprobante
    // -----------------------------------------------------------------------------    
    $vta_nota_credito->setFechaEmision(Gral::getFechaActual());
    $vta_nota_credito->setFechaVencimiento(Gral::getFechaActual());

    $gral_mes = GralMes::getOxCodigoNumero(date('m'));
    if ($gral_mes) {
        $vta_nota_credito->setGralMesId($gral_mes->getId());
    }
    $vta_nota_credito->setAnio(date('Y'));
    $vta_nota_credito->save();

    switch ($vta_tipo_origen_nota_credito->getCodigo()) {
        case VtaTipoOrigenNotaCredito::ORIGEN_DESCUENTO_FINANCIERO:
        case VtaTipoOrigenNotaCredito::ORIGEN_ANULACION_FACTURA:
            $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudNotaCredito($vta_nota_credito->getId());
            break;
        case VtaTipoOrigenNotaCredito::ORIGEN_ANULACION_ND:
        case VtaTipoOrigenNotaCredito::ORIGEN_ITEM:
            $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudNotaCreditoItem($vta_nota_credito->getId());
            break;
    }

    if($ws_fe_ope_solicitud){
        if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
            $arr["error_general"] = Lang::_lang("Error al enviar nota_credito electronica.", true);
            $arr["error"] = true;
        }
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>