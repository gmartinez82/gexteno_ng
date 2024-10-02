<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$cmb_gral_fp_forma_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", 0);
$key = Gral::getVars(Gral::VARS_POST, "key", 0);

$arr["error"] = false;

if ($cmb_gral_fp_forma_pago_id == 0) {
    $arr["cmb_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Debe seleccionar una forma de pago valida", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $arr["btn_cheque"] = FALSE;
    $gral_fp_forma_pago = GralFpFormaPago::getOxId($cmb_gral_fp_forma_pago_id);

    if ($gral_fp_forma_pago->getCodigo() == 'CHEQUE') {
        $arr["btn_cheque"] = TRUE;

        $arr_vta_recibo_cheque_infos = Gral::getSes('vta_recibo_descuento_financiero_cheque_info');

        if (!is_null($arr_vta_recibo_cheque_infos[$key])) {
            $arr_info = $arr_vta_recibo_cheque_infos[$key];
            $arr["importe_cheque_formateado"] = $arr_info['importe_cheque_formateado'];
            $arr["descripcion_cheque"] = $arr_info['descripcion'];
            $arr["numero_cheque"] = $arr_info['numero_cheque'];
        } else {
            $arr["importe_cheque_formateado"] = null;
            $arr["descripcion_cheque"] = '';
            $arr["numero_cheque"] = '';
        }
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>