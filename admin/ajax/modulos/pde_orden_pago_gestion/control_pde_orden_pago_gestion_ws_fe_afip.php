<?php

include "_autoload.php";

$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);

// se obtienen variables si es orden_pago de orden-venta
$chk_pde_comprobantes = Gral::getVars(Gral::VARS_POST, "chk_pde_comprobante", null);
$txt_pde_comprobante_importe_saldos = Gral::getVars(Gral::VARS_POST, "txt_pde_comprobante_importe_saldo", null);
$hdn_pde_comprobante_classs = Gral::getVars(Gral::VARS_POST, "hdn_pde_comprobante_class", null);

// se obtienen variables de forma de pago
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);

$txt_tributo_importes = Gral::getVars(Gral::VARS_POST, "txt_tributo_importe", 0);
$txt_tributo_fechas = Gral::getVars(Gral::VARS_POST, "txt_tributo_fecha", '');
$txt_tributo_numeros = Gral::getVars(Gral::VARS_POST, "txt_tributo_numero", '');

foreach ($txt_tributo_fechas as $i => $txt_tributo_fecha) {
    $txt_tributo_fechas_db[$i] = Gral::getFechaToDB($txt_tributo_fecha);
}

$modulo = Gral::getVars(Gral::VARS_POST, 'modulo', 0);
$var_sesion_random = Gral::getVars(Gral::VARS_POST, 'var_sesion_random', '');

$var_sesion_modulo = $modulo . '_cheque_info' . $var_sesion_random;
$arr_pde_orden_pago_cheque_infos = Gral::getSes($var_sesion_modulo);

// se realizan los controles de datos
$arr["error"] = false;

if ($prv_proveedor_id == 0) {
    //$arr["cmb_prv_proveedor_id"] = Lang::_lang("Debe indicar un proveedor.", true);
    //$arr["error"] = true;
}

// -----------------------------------------------------------------------------
// controles de orden_pagos por orden venta
// -----------------------------------------------------------------------------

if (is_null($chk_pde_comprobantes)) {
    //$arr["error_general"] = Lang::_lang("Debe seleccionar al menos un comprobante", true);
    //$arr["error"] = true;
}

if (is_null($txt_pde_comprobante_importe_saldos)) {
    //$arr["error_general"] .= Lang::_lang("La cantidad es incorrecta", true);
    //$arr["error"] = true;
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

// Se controla que exista un registro por cada forma de pago cheque
$gral_fp_forma_pago_cheque = GralFpFormaPago::getOxCodigo(GralFpFormaPago::TIPO_CHEQUE);

if ($gral_fp_forma_pago_cheque) {
    foreach ($cmb_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
        if ($cmb_gral_fp_forma_pago_id == $gral_fp_forma_pago_cheque->getId()) {
            if (is_null($arr_pde_orden_pago_cheque_infos[$key])) {
                $arr["cmb_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Indique los datos del Cheque", true);
                $arr["error"] = true;
            }
        }
    }
}

if (is_null($txt_descripcions)) {
    $arr["error_general"] = Lang::_lang("Debe ingresar al menos una forma de pago", true);
    $arr["error"] = true;
} else {
    foreach ($txt_descripcions as $key => $txt_descripcion) {
        if ($txt_descripcion == '') {
            $arr["txt_descripcion_" . $key] = Lang::_lang("Agregue una descripcion del Item", true);
            $arr["error"] = true;
        }
    }
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

if (is_array($chk_pde_comprobantes) && count($chk_pde_comprobantes) > 0) {
    foreach ($chk_pde_comprobantes as $i => $chk_pde_comprobante) {
        $txt_pde_comprobante_importe_saldo = $txt_pde_comprobante_importe_saldos[$i];
        $txt_pde_comprobante_importe_saldo = Gral::getImporteDesdePriceFormatToDB($txt_pde_comprobante_importe_saldo);
        $importe_comprobantes_total_saldo += $txt_pde_comprobante_importe_saldo;
    }
}


if (is_array($txt_tributo_importes) && count($txt_tributo_importes) > 0) {
    foreach ($txt_tributo_importes as $i => $txt_tributo_importe) {
        $txt_tributo_importe = Gral::getImporteDesdePriceFormatToDB($txt_tributo_importe);
        $importe_retenciones_total_saldo += $txt_tributo_importe;

        if ($txt_tributo_importe > 0) {

            $txt_tributo_fecha = $txt_tributo_fechas_db[$i];
            $txt_tributo_numero = $txt_tributo_numeros[$i];

            if (!Ctrl::esFechaValida($txt_tributo_fecha) || $txt_tributo_fecha == '1900-01-01') {
                $arr["txt_tributo_fecha_" . $i] = Lang::_lang("Debe ingresar una fecha valida", true);
                $arr["error"] = true;
            }
            if (Ctrl::esVacio($txt_tributo_numero)) {
                //$arr["txt_tributo_numero_" . $i] = Lang::_lang("Debe ingresar un nro de comprobante", true);
                //$arr["error"] = true;
            }
        }
    }
}


if (is_array($txt_importe_unitarios) && count($txt_importe_unitarios) > 0) {
    foreach ($txt_importe_unitarios as $i => $txt_importe_unitario) {
        $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);
        $importe_total += $txt_importe_unitario;
    }
    $importe_total_saldo = $importe_comprobantes_total_saldo - $importe_total - $importe_retenciones_total_saldo;
}

if (round($importe_total_saldo, 2) > 0.1) {
    $arr["error_general"] .= Lang::_lang("El importe de los comprobantes no puede ser mayor que el del pago", true);
    $arr["error_general"] .= '<br />' . $importe_comprobantes_total_saldo;
    $arr["error_general"] .= '<br />' . $importe_total;
    $arr["error_general"] .= '<br />' . $importe_retenciones_total_saldo;
    $arr["error_general"] .= '<br />' . $importe_total_saldo;
    $arr["error"] = true;
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>