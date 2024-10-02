<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);

$pde_tipo_factura_id = Gral::getVars(Gral::VARS_POST, "cmb_pde_tipo_factura_id", 0);
$gral_actividad_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_actividad_id", null);
$gral_escenario_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_escenario_id", null);
$gral_fp_forma_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", 0);

// se obtienen variables si es factura de orden-venta
$pde_oc_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_oc", null);
$pde_oc_cantidads = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_cantidad", null);
$pde_oc_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_importe_unitario", null);
$pde_oc_porcentaje_descuentos = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_porcentaje_descuento", null);
$cmb_ordenar_ocs = Gral::getVars(Gral::VARS_POST, "cmb_ordenar_oc", null);

//Gral::prr($cmb_ordenar_ocs);
//exit;

// se obtienen variables si es factura de item
$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_pde_factura_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_pde_factura_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);

$txt_fecha = Gral::getVars(1, "txt_fecha", '');
$cmb_gral_mes_id = Gral::getVars(1, "cmb_gral_mes_id", 0);
$cmb_anio = Gral::getVars(1, "cmb_anio", 0);
$txt_nro_timbrado = Gral::getVars(Gral::VARS_POST, "txt_nro_timbrado", "", Gral::TIPO_STRING);
$txt_nro_punto_venta = Gral::getVars(1, "txt_nro_punto_venta");
$txt_nro_comprobante = Gral::getVars(1, "txt_nro_comprobante");
$txt_nro_despacho = Gral::getVars(1, "txt_nro_despacho");
$txt_fecha_vencimiento = Gral::getVars(Gral::VARS_POST, "txt_fecha_vencimiento", '');

$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$pde_centro_pedido_id = Gral::getVars(Gral::VARS_POST, "cmb_pde_centro_pedido_id", 0);
$gral_centro_costo_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_centro_costo_id", 0);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

// se recuperan tributos agregados
$txt_comprobante_tributos = Gral::getVars(Gral::VARS_POST, "txt_comprobante_tributo", 0);

$cmb_prv_descuento_financiero_id = Gral::getVars(Gral::VARS_POST, "cmb_prv_descuento_financiero_id", null);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}
if ($pde_tipo_factura_id == 0) {
    $arr["cmb_pde_tipo_factura_id"] = Lang::_lang("Debe seleccionar un Tipo de Factura", true);
    $arr["error"] = true;
}
if ($gral_empresa_id == 0) {
    $arr["cmb_gral_empresa_id"] = Lang::_lang("Debe seleccionar una Empresa", true);
    $arr["error"] = true;
}
if ($gral_fp_forma_pago_id == 0) {
    $arr["cmb_gral_fp_forma_pago_id"] = Lang::_lang("Debe seleccionar una forma de pago", true);
    $arr["error"] = true;
}
if ($pde_centro_pedido_id == 0) {
    $arr["cmb_pde_centro_pedido_id"] = Lang::_lang("Debe seleccionar un Centro de Pedido", true);
    $arr["error"] = true;
}
if ($gral_centro_costo_id == 0) {
    //$arr["cmb_gral_centro_costo_id"] = Lang::_lang("Debe seleccionar un Centro de Costo", true);
    //$arr["error"] = true;
}
if ($prv_proveedor_id == 0) {
    $arr["cmb_prv_proveedor_id"] = Lang::_lang("Debe indicar un proveedor", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_fecha)) {
    $arr["txt_fecha"] = Lang::_lang("Debe ingresar una fecha valida", true);
    $arr["error"] = true;
} elseif (!Ctrl::esFechaValida(Gral::getFechaToDB($txt_fecha))) {
    $arr["txt_fecha"] = Lang::_lang("Debe ingresar una fecha valida", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_nro_timbrado)) {
    $arr["txt_nro_timbrado"] = Lang::_lang("Debe ingresar un numero de timbrado", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_nro_punto_venta)) {
    $arr["txt_nro_punto_venta"] = Lang::_lang("Debe ingresar un punto de venta valido", true);
    $arr["error"] = true;
} else {
    if (strlen($txt_nro_punto_venta) != DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA) {
        $arr["txt_nro_punto_venta"] = Lang::_lang("Debe ingresar un punto de venta valido, por ejemplo 001-001", true);
        $arr["error"] = true;
    }
}
if (!Ctrl::esDigito($txt_nro_comprobante)) {
    $arr["txt_nro_comprobante"] = Lang::_lang("Debe ingresar un nro de comprobante valido", true);
    $arr["error"] = true;
} else {
    if (strlen($txt_nro_comprobante) != DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE) {
        $arr["txt_nro_comprobante"] = Lang::_lang("Debe ingresar un nro de comprobante valido", true);
        $arr["error"] = true;
    }
}

// se controla existencia de numero de comprobante para el mismo proveedor
$pde_comprobante_existente = PdeFactura::getPdeFacturaXProveedorYNumero($prv_proveedor_id, $txt_nro_punto_venta . '-' . $txt_nro_comprobante);
if ($pde_comprobante_existente) {
    $arr["txt_nro_comprobante"] = "El numero de comprobante indicado ya fue cargado para el proveedor seleccionado el dia ".Gral::getFechaHoraToWeb($pde_comprobante_existente->getCreado()).' por '.$pde_comprobante_existente->getCreadoPorDescripcion();
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_fecha_vencimiento)) {
    $txt_fecha_vencimiento = '1900-01-01';
    //$arr["txt_fecha_vencimiento"] = Lang::_lang("Debe ingresar una fecha", true);
    //$arr["error"] = true;
} else {
    $txt_fecha_vencimiento = Gral::getFechaToDB($txt_fecha_vencimiento);
    if (!Ctrl::esFechaValida($txt_fecha_vencimiento)) {
        $arr["txt_fecha_vencimiento"] = Lang::_lang("Debe ingresar una fecha valida", true);
        $arr["error"] = true;
    } elseif (!Date::esRangoValido($txt_fecha, $txt_fecha_vencimiento)) {
        $arr["txt_fecha_vencimiento"] = Lang::_lang("No puede ser menor a la fecha de emision", true);
        $arr["error"] = true;
    }
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

    if (is_null($cmb_pde_factura_concepto_ids)) {
        $arr["error_general"] .= Lang::_lang(" Debe seleccionar un concepto", true);
        $arr["error"] = true;
    } else {
        foreach ($cmb_pde_factura_concepto_ids as $key => $cmb_pde_factura_concepto_id) {
            if ($cmb_pde_factura_concepto_id == '') {
                $arr["cmb_pde_factura_concepto_id_" . $key] = Lang::_lang("Debe seleccionar un tipo de concepto", true);
                $arr["error"] = true;
            }
        }
    }
}

if (!$arr["error"]) {

    $txt_fecha = Gral::getFechaToDB($txt_fecha);
    $ws_fe_param_tipo_concepto_id = 1;

    if ($tipo == 'orden-venta') {
        $pde_factura = PdeFactura::setInicializarPdeFactura($pde_oc_ids, $pde_oc_cantidads, $pde_oc_importe_unitarios, $pde_oc_porcentaje_descuentos, $cmb_ordenar_ocs, $prv_proveedor_id, $txt_fecha, $cmb_gral_mes_id, $cmb_anio, $txt_nro_timbrado, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_nro_despacho, $txt_fecha_vencimiento, $gral_empresa_id, $pde_centro_pedido_id, $gral_fp_forma_pago_id, $gral_actividad_id, $gral_escenario_id, $pde_tipo_factura_id, $ws_fe_param_tipo_concepto_id, $txa_observacion, $txt_comprobante_tributos, $cmb_prv_descuento_financiero_id, $gral_centro_costo_id);
    }

    if ($tipo == 'item') {
        $pde_factura = PdeFactura::setInicializarPdeFacturaItem($gral_empresa_id, $pde_centro_pedido_id, $gral_fp_forma_pago_id, $gral_actividad_id, $gral_escenario_id, $pde_tipo_factura_id, $prv_proveedor_id, $txt_fecha, $cmb_gral_mes_id, $cmb_anio, $txt_nro_timbrado, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_nro_despacho, $txt_fecha_vencimiento, $txt_cantidads, $txt_descripcions, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids, $cmb_pde_factura_concepto_ids, $txa_observacion, $txt_comprobante_tributos, $cmb_prv_descuento_financiero_id, $gral_centro_costo_id);
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>