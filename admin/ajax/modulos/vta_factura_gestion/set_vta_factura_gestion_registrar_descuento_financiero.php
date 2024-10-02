<?php

include "_autoload.php";

$vta_factura_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_factura", null);
$cmb_generar_recibo = Gral::getVars(Gral::VARS_POST, "cmb_generar_recibo", -1);
$txt_descuento_financiero = Gral::getVars(Gral::VARS_POST, "txt_descuento_financiero", 0);
$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica", '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');
//$cmb_gral_fp_forma_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", 0);

$cmb_vta_recibo_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_recibo_concepto_id", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_referencias = Gral::getVars(Gral::VARS_POST, "txt_referencia", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);

$modulo                      = Gral::getVars(Gral::VARS_POST, 'modulo', 0);
$var_sesion_random           = Gral::getVars(Gral::VARS_POST, 'var_sesion_random', '');

// se realizan los controles de datos
$arr["error"] = false;

if ($txt_descuento_financiero == 0) {
    $arr["txt_descuento_financiero"] = Lang::_lang("Debe seleccionar un valor valido", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_nota_publica)) {
    $arr["txa_nota_publica"] = Lang::_lang("Debe indicar una nota publica para el cliente", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if ($cmb_generar_recibo == -1) {
    $arr["cmb_generar_recibo"] = Lang::_lang("Debe indicar si desea generar recibo o no", true);
    $arr["error"] = true;
} elseif ($cmb_generar_recibo == 1) {

    if (is_null($cmb_vta_recibo_concepto_ids)) {
        $arr["error_general"] .= Lang::_lang(" Debe seleccionar un concepto de pago.", true);
        $arr["error"] = true;
    } else {
        foreach ($cmb_vta_recibo_concepto_ids as $key => $cmb_vta_recibo_concepto_id) {
            if ($cmb_vta_recibo_concepto_id == '') {
                $arr["cmb_vta_recibo_concepto_id_" . $key] = Lang::_lang("Debe seleccionar un concepto de pago valida", true);
                $arr["error"] = true;
            }
        }
    }

    if (is_null($txt_descripcions)) {
        $arr["error_general"] = Lang::_lang("Debe agregar una descripcion de los Items", true);
        $arr["error"] = true;
    } else {
        foreach ($txt_descripcions as $key => $txt_descripcion) {
            if ($txt_descripcion == '') {
                $arr["txt_descripcion_" . $key] = Lang::_lang("Debe agregar una descripcion del Item", true);
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
        $arr["error_general"] .= Lang::_lang(" El importe es incorrecto.", true);
        $arr["error"] = true;
    } else {
        foreach ($txt_importe_unitarios as $key => $txt_importe_unitario) {

            $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);

            if ($txt_importe_unitario == 0) {
                $arr["txt_importe_unitario_" . $key] = Lang::_lang("Debe agregar un importe valido", true);
                $arr["error"] = true;
            } elseif (!Ctrl::esNumero($txt_importe_unitario)) {
                $arr["txt_importe_unitario_" . $key] = Lang::_lang("Debe indicar el importe en numeros", true);
                $arr["error"] = true;
            }
        }
    }

    if (is_null($cmb_gral_fp_forma_pago_ids)) {
        $arr["error_general"] .= Lang::_lang(" Debe seleccionar una forma de pago", true);
        $arr["error"] = true;
    } else {
        foreach ($cmb_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
            if ($cmb_gral_fp_forma_pago_id == '') {
                $arr["cmb_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Debe seleccionar una forma de pago valida", true);
                $arr["error"] = true;
            }
        }
    }
}

if (is_null($vta_factura_ids)) {
    $arr["error_general"] = Lang::_lang("Debe seleccionar una factura", true);
    $arr["error"] = true;
}


if (!$arr["error"]) {

    VtaFactura::setRegistrarDescuentoFinanciero($vta_factura_ids, $var_sesion_random, $txt_descuento_financiero, $cmb_generar_recibo, $cmb_gral_fp_forma_pago_id, $txa_nota_publica, $txa_observacion, $cmb_vta_recibo_concepto_ids, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $cmb_gral_fp_forma_pago_ids);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>