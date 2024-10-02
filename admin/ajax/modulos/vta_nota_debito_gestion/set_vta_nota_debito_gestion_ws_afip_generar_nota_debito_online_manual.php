<?php

include "_autoload.php";

//$ws_fe_param_tipo_concepto_id = Gral::getVars(Gral::VARS_POST, "cmb_ws_fe_param_tipo_concepto_id", 0);
//$ws_fe_param_punto_venta_id = Gral::getVars(Gral::VARS_POST, "ws_fe_param_punto_venta_id", 0);

$vta_nota_debito_id = Gral::getVars(Gral::VARS_POST, "vta_nota_debito_id", 0);
$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);
$vta_tipo_nota_debito_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_tipo_nota_debito_id", 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);
$vta_tipo_origen_nota_debito = $vta_nota_debito->getVtaTipoOrigenNotaDebito();

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if($vta_nota_debito->getCae() != ''){
    $arr["error_general"] = Lang::_lang("El comprobante ya obtuvo CAE y NUMERO de comprobante", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $ws_fe_param_tipo_concepto_id = 1;
    $ws_fe_afip_tipo_documento = 80;

    // -----------------------------------------------------------------------------
    // se actualizan valores del comprobante
    // -----------------------------------------------------------------------------    
    $vta_nota_debito->setFechaEmision(Gral::getFechaActual());
    $vta_nota_debito->setFechaVencimiento(Gral::getFechaActual());

    $gral_mes = GralMes::getOxCodigoNumero(date('m'));
    if ($gral_mes) {
        $vta_nota_debito->setGralMesId($gral_mes->getId());
    }
    $vta_nota_debito->setAnio(date('Y'));
    $vta_nota_debito->save();
    
    switch ($vta_tipo_origen_nota_debito->getCodigo()) {
        case VtaTipoOrigenNotaDebito::ORIGEN_ITEM:
        case VtaTipoOrigenNotaDebito::ORIGEN_ANULACION_NC:
            $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudNotaDebitoItem($vta_nota_debito->getId());
            break;
    }

    if ($ws_fe_ope_solicitud) {
        if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
            $arr["error_general"] = Lang::_lang("Error al enviar nota_debito electronica.", true);
            $arr["error"] = true;
        }
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>