<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

// se obtienen variables si es factura de orden-venta
$pde_oc_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_oc", null);
$pde_oc_cantidads = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_cantidad", null);
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);

// se obtienen variables si es factura de item
$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_pde_factura_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_pde_factura_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);

// se realizan los controles de datos
$arr["error"] = false;

if ($prv_proveedor_id == 0) {
    //$arr["cmb_prv_proveedor_id"] = Lang::_lang("Debe indicar un proveedor.", true);
    //$arr["error"] = true;
}

// -----------------------------------------------------------------------------
// controles de facturas por orden venta
// -----------------------------------------------------------------------------
if ($tipo == 'orden-venta') {
    
    if (is_null($pde_oc_ids)) {
        $arr["error_general"] = Lang::_lang("Debe seleccionar una Orden de Venta", true);
        $arr["error"] = true;
    }

    if (is_null($pde_oc_cantidads)) {
        $arr["error_general"] .= Lang::_lang(" La cantidad es incorrecta", true);
        $arr["error"] = true;
    }

    foreach ($pde_oc_cantidads as $pde_oc_cantidad) {
        if ($pde_oc_cantidad == 0) {
            $arr["error_general"] .= Lang::_lang(" La cantidad no puede ser 0", true);
            $arr["error"] = true;
        }
    }
}

// -----------------------------------------------------------------------------
// controles de facturas por item
// -----------------------------------------------------------------------------
if ($tipo == 'item') {
    
    if (is_null($txt_descripcions)) {
        $arr["error_general"] = Lang::_lang("Debe agregar una descripcion de los Items.", true);
        $arr["error"] = true;
    } else {
        foreach ($txt_descripcions as $key => $txt_descripcion) {
            if ($txt_descripcion == '') {
                $arr["txt_descripcion_" . $key] = Lang::_lang("Debe agregar una descripcion del Item.", true);
                $arr["error"] = true;
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
                $arr["txt_importe_unitario_" . $key] = Lang::_lang("Debe agregar un importe valido.", true);
                $arr["error"] = true;
            } elseif (!Ctrl::esNumero($txt_importe_unitario)) {
                $arr["txt_importe_unitario_" . $key] = Lang::_lang("Debe indicar el importe en numeros.", true);
                $arr["error"] = true;
            }
        }
    }

    if (is_null($cmb_gral_tipo_iva_ids)) {
        $arr["error_general"] .= Lang::_lang(" Debe seleccionar un tipo de Iva.", true);
        $arr["error"] = true;
    } else {
        foreach ($cmb_gral_tipo_iva_ids as $key => $cmb_gral_tipo_iva_id) {
            if ($cmb_gral_tipo_iva_id == '') {
                $arr["cmb_gral_tipo_iva_id_" . $key] = Lang::_lang("Debe seleccionar un tipo de Iva valido.", true);
                $arr["error"] = true;
            }
        }
    }

    if (is_null($cmb_pde_factura_concepto_ids)) {
        $arr["error_general"] .= Lang::_lang(" Debe seleccionar un concepto.", true);
        $arr["error"] = true;
    } else {
        foreach ($cmb_pde_factura_concepto_ids as $key => $cmb_pde_factura_concepto_id) {
            if ($cmb_pde_factura_concepto_id == '') {
                $arr["cmb_pde_factura_concepto_id_" . $key] = Lang::_lang("Debe seleccionar un tipo de concepto.", true);
                $arr["error"] = true;
            }
        }
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>