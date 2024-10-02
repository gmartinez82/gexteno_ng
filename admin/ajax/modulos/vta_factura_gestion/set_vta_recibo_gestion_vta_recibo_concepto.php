<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$cmb_vta_recibo_concepto_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_recibo_concepto_id", 0);
$key = Gral::getVars(Gral::VARS_POST, "key", 0);

$arr["error"] = false;

if ($cmb_vta_recibo_concepto_id == 0) {
    $arr["cmb_vta_recibo_concepto_id_" . $key] = Lang::_lang("Debe seleccionar un concepto valido", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $arr["btn_retencion"] = FALSE;
    $vta_recibo_concepto = VtaReciboConcepto::getOxId($cmb_vta_recibo_concepto_id);
    
    if ($vta_recibo_concepto->getesRetencion()) {
        $arr["btn_retencion"] = TRUE;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>