<?php

include "_autoload.php";
//Gral::setVerErroresPHP();


$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');
$vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);
$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);

//$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_referencias = Gral::getVars(Gral::VARS_POST, "txt_referencia", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);
$cmb_vta_ajuste_haber_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_ajuste_haber_concepto_id", null);
//$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);

$modulo = Gral::getVars(Gral::VARS_POST, 'modulo', 0);
$var_sesion_random = Gral::getVars(Gral::VARS_POST, 'var_sesion_random', '');

$var_sesion_modulo = $modulo . '_cheque_info' . $var_sesion_random;
$var_sesion_modulo_retencion = $modulo . '_retencion_info' . $var_sesion_random;
$arr_vta_ajuste_haber_cheque_infos = Gral::getSes($var_sesion_modulo);
$arr_vta_ajuste_haber_retencion_infos = Gral::getSes($var_sesion_modulo_retencion);

// se realizan los controles de datos
$arr["error"] = false;

if ($cli_cliente_id == 0) {
    $arr["cmb_cli_cliente_id"] = Lang::_lang("Seleccionar un cliente", true);
    $arr["error"] = true;
}

if (is_null($cmb_vta_ajuste_haber_concepto_ids)) {
    $arr["error_general"] .= Lang::_lang("Seleccionar un concepto", true);
    $arr["error"] = true;
} else {
    foreach ($cmb_vta_ajuste_haber_concepto_ids as $key => $cmb_vta_ajuste_haber_concepto_id) {
        if ($cmb_vta_ajuste_haber_concepto_id == '') {
            $arr["cmb_vta_ajuste_haber_concepto_id_" . $key] = Lang::_lang("Seleccionar un concepto", true);
            $arr["error"] = true;
        } else {
            $vta_ajuste_haber_concepto = VtaAjusteHaberConcepto::getOxId($cmb_vta_ajuste_haber_concepto_id);
            if ($vta_ajuste_haber_concepto->getEsRetencion()) {
                // percepciones iibb mnes
                if (is_null($arr_vta_ajuste_haber_retencion_infos[$key])) {
                    $arr["cmb_vta_ajuste_haber_concepto_id_" . $key] = Lang::_lang("Indique los datos de la Retencion", true);
                    $arr["error"] = true;
                }
            }
        }
    }
}

if (is_null($txt_descripcions)) {
    $arr["error_general"] = Lang::_lang("Agregue una descripcion del Item", true);
    $arr["error"] = true;
} else {
    foreach ($txt_descripcions as $key => $txt_descripcion) {
        if ($txt_descripcion == '') {
            $arr["txt_descripcion_" . $key] = Lang::_lang("Agregue una descripcion del Item", true);
            $arr["error"] = true;
        }
    }
}

if (is_null($txt_referencias)) {
    $arr["error_general"] = Lang::_lang("Agregue una referencia del Item", true);
    $arr["error"] = true;
} else {
    foreach ($txt_referencias as $key => $txt_referencia) {

        if ($cmb_gral_fp_forma_pago_ids[$key] != '') {
            $gral_fp_forma_pago_cheque = GralFpFormaPago::getOxId($cmb_gral_fp_forma_pago_ids[$key]);
            if ($gral_fp_forma_pago_cheque) {
                if ($gral_fp_forma_pago_cheque->getRequiereReferencia() == 1) {
                    if ($txt_referencia == '') {
                        $arr["txt_referencia_" . $key] = Lang::_lang("Agregue un codigo de referencia", true);
                        $arr["error"] = true;
                    }
                }
            }
        }
    }
}


if (is_null($txt_importe_unitarios)) {
    $arr["error_general"] .= Lang::_lang("El importe es incorrecto", true);
    $arr["error"] = true;
} else {
    foreach ($txt_importe_unitarios as $key => $txt_importe_unitario) {

        $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);

        if ($txt_importe_unitario == 0) {
            $arr["txt_importe_unitario_" . $key] = Lang::_lang("Importe invalido", true);
            $arr["error"] = true;
        } elseif (!Ctrl::esNumero($txt_importe_unitario)) {
            $arr["txt_importe_unitario_" . $key] = Lang::_lang("Importe invalido", true);
            $arr["error"] = true;
        }
    }
}

if (is_null($cmb_gral_fp_forma_pago_ids)) {
    $arr["error_general"] .= Lang::_lang("Seleccionar forma de pago", true);
    $arr["error"] = true;
} else {
    foreach ($cmb_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
        if ($cmb_gral_fp_forma_pago_id == '') {
            $arr["cmb_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Seleccionar forma de pago", true);
            $arr["error"] = true;
        }
    }
}

// se controla que exista un registro por cada forma de pago cheque
$gral_fp_forma_pago_cheque = GralFpFormaPago::getOxCodigo(GralFpFormaPago::TIPO_CHEQUE);

if ($gral_fp_forma_pago_cheque) {
    foreach ($cmb_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
        if ($cmb_gral_fp_forma_pago_id == $gral_fp_forma_pago_cheque->getId()) {
            if (is_null($arr_vta_ajuste_haber_cheque_infos[$key])) {
                $arr["cmb_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Indique los datos del Cheque", true);
                $arr["error"] = true;
            }
        }
    }
}

if (!$arr["error"]) {
    
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>