<?php

//----------------------------------------------------------------------------------------------------------------------
// Controles del bloque generico 
//----------------------------------------------------------------------------------------------------------------------
if (is_null($cmb_vta_recibo_item_generico_vta_recibo_concepto_ids)) {
    $arr["error_general_vta_recibo_generico"] .= Lang::_lang("Seleccionar un concepto. ", true);
    $arr["error"] = true;
} else {
    foreach ($cmb_vta_recibo_item_generico_vta_recibo_concepto_ids as $key => $cmb_vta_recibo_concepto_id) {
        if ($cmb_vta_recibo_concepto_id == '') {
            $arr["cmb_vta_recibo_item_generico_vta_recibo_concepto_id_" . $key] = Lang::_lang("Seleccionar un concepto", true);
            $arr["error"] = true;
        } else {
            $vta_recibo_concepto = VtaReciboConcepto::getOxId($cmb_vta_recibo_concepto_id);
            if ($vta_recibo_concepto->getEsRetencion()) {
                if (is_null($arr_vta_recibo_retencion_infos[$key])) {
                    $arr["cmb_vta_recibo_item_generico_vta_recibo_concepto_id_" . $key] = Lang::_lang("Indique los datos de la Retencion", true);
                    $arr["error"] = true;
                }
            }
        }
    }
}


if (is_null($txt_vta_recibo_item_generico_descripcions)) {
    $arr["error_general_vta_recibo_generico"] = Lang::_lang("Agregue una descripcion del Item. ", true);
    $arr["error"] = true;
} else {
    foreach ($txt_vta_recibo_item_generico_descripcions as $key => $txt_descripcion) {
        if ($txt_descripcion == '') {
            $arr["txt_vta_recibo_item_generico_descripcion_" . $key] = Lang::_lang("Agregue una descripcion del Item", true);
            $arr["error"] = true;
        }
    }
}

if (is_null($txt_vta_recibo_item_generico_referencias)) {
    $arr["error_general_vta_recibo_generico"] = Lang::_lang("Agregue una referencia del Item. ", true);
    $arr["error"] = true;
} else {
    foreach ($txt_vta_recibo_item_generico_referencias as $key => $txt_referencia) {
        if ($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids[$key] != '') {
            $gral_fp_forma_pago = GralFpFormaPago::getOxId($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids[$key]);
            if ($gral_fp_forma_pago) {
                if ($gral_fp_forma_pago->getRequiereReferencia() == 1) {
                    if ($txt_referencia == '') {
                        $arr["txt_vta_recibo_item_generico_referencia_" . $key] = Lang::_lang("Agregue un codigo de referencia", true);
                        $arr["error"] = true;
                    }
                }
            }
        }
    }
}

$suma_txt_importe_unitario = 0;
if (is_null($txt_vta_recibo_item_generico_importe_unitarios)) {
    $arr["error_general_vta_recibo_generico"] .= Lang::_lang("El importe es incorrecto. ", true);
    $arr["error"] = true;
} else {
    foreach ($txt_vta_recibo_item_generico_importe_unitarios as $key => $txt_importe_unitario) {
        $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);
        $suma_txt_importe_unitario += $txt_importe_unitario;
        if ($txt_importe_unitario == 0) {
            $arr["txt_vta_recibo_item_generico_importe_unitario_" . $key] = Lang::_lang("Importe invalido", true);
            $arr["error"] = true;
        } elseif (!Ctrl::esNumero($txt_importe_unitario)) {
            $arr["txt_vta_recibo_item_generico_importe_unitario_" . $key] = Lang::_lang("Importe invalido", true);
            $arr["error"] = true;
        }
    }
}

if (is_null($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids)) {
    $arr["error_general_vta_recibo_generico"] .= Lang::_lang("Seleccionar forma de pago. ", true);
    $arr["error"] = true;
} else {
    foreach ($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
        if ($cmb_gral_fp_forma_pago_id == '') {
            $arr["cmb_vta_recibo_item_generico_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Seleccionar forma de pago. ", true);
            $arr["error"] = true;
        }
    }
}

// se controla que exista un registro por cada forma de pago cheque
$gral_fp_forma_pago_cheque = GralFpFormaPago::getOxCodigo(GralFpFormaPago::TIPO_CHEQUE);
if ($gral_fp_forma_pago_cheque) {
    foreach ($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
        if ($cmb_gral_fp_forma_pago_id == $gral_fp_forma_pago_cheque->getId()) {
            if (is_null($arr_vta_recibo_cheque_infos[$key])) {
                $arr["cmb_vta_recibo_item_generico_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Indique los datos del Cheque", true);
                $arr["error"] = true;
            }
        }
    }
}
