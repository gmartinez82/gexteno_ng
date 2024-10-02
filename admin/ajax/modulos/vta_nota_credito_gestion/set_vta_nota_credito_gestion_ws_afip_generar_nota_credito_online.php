<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

// -----------------------------------------------------------------------------
// se recibe el identificador de cliente
// -----------------------------------------------------------------------------
$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);

// -----------------------------------------------------------------------------
// se reciben el resto de los valores enviados via POST
// -----------------------------------------------------------------------------
$cmb_vta_preventista_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_preventista_id", null);

$vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);
$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$gral_actividad_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_actividad_id", 0);
$gral_escenario_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_escenario_id", null);
$gral_fp_forma_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", 0);

$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_vta_nota_credito_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_nota_credito_concepto_id", null);
$cmb_aplica_percepcion_iibbs = Gral::getVars(Gral::VARS_POST, "cmb_aplica_percepcion_iibb", null);

$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica", '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$txt_nro_timbrado = Gral::getVars(Gral::VARS_POST, "txt_nro_timbrado", "", Gral::TIPO_STRING);

$chk_tributo_omitir_minimo = Gral::getVars(Gral::VARS_POST, "chk_tributo_omitir_minimo", 0);

// -----------------------------------------------------------------------------
// se reciben comprobantes vinculados
// -----------------------------------------------------------------------------
$vta_nota_debito_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaNotaDebito", null);
$vta_factura_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaFactura", null);

// -----------------------------------------------------------------------------
// se realizan los controles de datos
// -----------------------------------------------------------------------------
$arr["error"] = false;

if ($cli_cliente_id == 0) {
    $arr["cli_cliente_id"] = Lang::_lang("Debe seleccionar un cliente. ", true);
    $arr["error"] = true;
}
if (is_null($vta_factura_ids) && is_null($vta_nota_debito_ids)) {
    $arr["error_general"] .= Lang::_lang("Debe seleccionar al menos un comprobante vinculado", true).'<br />';
    $arr["error"] = true;
}
if ($gral_actividad_id == 0) {
    $arr["cmb_gral_actividad_id"] = Lang::_lang("Debe seleccionar una actividad", true);
    $arr["error"] = true;
}
if ($gral_fp_forma_pago_id == 0) {
    $arr["cmb_gral_fp_forma_pago_id"] = Lang::_lang("Debe seleccionar una forma de pago", true);
    $arr["error"] = true;
}
if ($gral_empresa_id == 0) {
    $arr["cmb_gral_empresa_id"] = Lang::_lang("Debe seleccionar una empresa facturadora", true);
    $arr["error"] = true;
}
if ($vta_punto_venta_id == 0) {
    $arr["cmb_vta_punto_venta_id"] = Lang::_lang("Debe seleccionar un punto de venta", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_nro_timbrado)) {
    $arr["txt_nro_timbrado"] = Lang::_lang("Debe ingresar un numero de timbrado", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe agregar una observacion", true);
    $arr["error"] = true;
}

if (is_null($txt_descripcions)) {
    $arr["error_general"].= Lang::_lang("Debe agregar una descripcion de los Items", true);
    $arr["error"] = true;
} else {
    foreach ($txt_descripcions as $key => $txt_descripcion) {
        if ($txt_descripcion == '') {
            $arr["txt_descripcion_" . $key] = Lang::_lang("Debe agregar una descripcion del Item", true);
            $arr["error"] = true;
        }
    }
}

if (is_null($txt_importe_unitarios)) {
    $arr["error_general"] .= Lang::_lang("Debe agregar un importe valido", true).'<br />';
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

if (is_null($cmb_gral_tipo_iva_ids)) {
    $arr["error_general"] .= Lang::_lang(" Debe seleccionar un tipo de Iva", true);
    $arr["error"] = true;
} else {
    foreach ($cmb_gral_tipo_iva_ids as $key => $cmb_gral_tipo_iva_id) {
        if ($cmb_gral_tipo_iva_id == '') {
            $arr["cmb_gral_tipo_iva_id_" . $key] = Lang::_lang("Debe seleccionar un tipo de Iva valido", true);
            $arr["error"] = true;
        }
    }
}

if (is_null($cmb_vta_nota_credito_concepto_ids)) {
    $arr["error_general"] .= Lang::_lang(" Debe seleccionar un concepto", true);
    $arr["error"] = true;
} else {
    foreach ($cmb_vta_nota_credito_concepto_ids as $key => $cmb_vta_nota_credito_concepto_id) {
        if ($cmb_vta_nota_credito_concepto_id == '') {
            $arr["cmb_vta_nota_credito_concepto_id_" . $key] = Lang::_lang("Debe seleccionar un tipo de concepto", true);
            $arr["error"] = true;
        }
    }
}


if (!$arr["error"]) {
    $vta_nota_credito = VtaNotaCredito::setInicializarVtaNotaCreditoItem($cmb_vta_preventista_id, $gral_actividad_id, $gral_escenario_id, $gral_fp_forma_pago_id, $gral_empresa_id, $vta_punto_venta_id, $txt_nro_timbrado, $cli_cliente_id, $txt_cantidads, $txt_descripcions, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids, $cmb_vta_nota_credito_concepto_ids, $cmb_aplica_percepcion_iibbs, $txa_nota_publica, $txa_observacion, $chk_tributo_omitir_minimo, $vta_nota_debito_ids, $vta_factura_ids);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>