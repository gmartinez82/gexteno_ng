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
$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_vta_nota_credito_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_nota_credito_concepto_id", null);

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
    $arr["cmb_cli_cliente_id"] = Lang::_lang("Debe seleccionar un cliente", true);
    $arr["error_general"] = Lang::_lang("Debe seleccionar un cliente", true).'<br />';
    $arr["error"] = true;
}

if (is_null($vta_factura_ids) && is_null($vta_nota_debito_ids)) {
    $arr["error_general"] .= Lang::_lang("Debe seleccionar al menos un comprobante origen", true).'<br />';
    $arr["error"] = true;
}

if (is_null($txt_descripcions)) {
    $arr["error_general"].= Lang::_lang("Debe agregar una descripcion de los Items", true).'<br />';
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
    $arr["error_general"] .= Lang::_lang(" Debe seleccionar un tipo de Iva", true).'<br />';
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
    $arr["error_general"] .= Lang::_lang(" Debe seleccionar un concepto.", true).'<br />';
    $arr["error"] = true;
} else {
    foreach ($cmb_vta_nota_credito_concepto_ids as $key => $cmb_vta_nota_credito_concepto_id) {
        if ($cmb_vta_nota_credito_concepto_id == '') {
            $arr["cmb_vta_nota_credito_concepto_id_" . $key] = Lang::_lang("Debe seleccionar un tipo de concepto", true);
            $arr["error"] = true;
        }
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>