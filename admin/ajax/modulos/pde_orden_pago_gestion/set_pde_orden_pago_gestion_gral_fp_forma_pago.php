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

    if ($gral_fp_forma_pago->getCodigo() == GralFpFormaPago::TIPO_CHEQUE) {
        $arr["btn_cheque"] = TRUE;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>