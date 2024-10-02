<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);
$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, 'chk_vta_presupuesto_id', 0);

$vta_presupuesto_seleccionado = VtaPresupuesto::getOxId($vta_presupuesto_id);

$cmb_vta_preventista_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_preventista_id", null);
$cmb_vta_comprador_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_comprador_id", null);
$cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_vendedor_id", null);
$gral_actividad_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_actividad_id", 0);
$gral_escenario_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_escenario_id", null);
$cmb_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_sucursal_id", 0);
$cli_centro_recepcion_id = Gral::getVars(Gral::VARS_POST, "cmb_cli_centro_recepcion_id", 0);
$gral_fp_forma_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", 0);
$cmb_gral_fp_cuota_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_cuota_id", 0);
$txt_nro_timbrado = Gral::getVars(Gral::VARS_POST, "txt_nro_timbrado", "", Gral::TIPO_STRING);
$txt_fecha_vencimiento = Gral::getVars(Gral::VARS_POST, "txt_fecha_vencimiento", '');

// se obtienen variables si es factura de orden-venta
$vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_orden_venta", null);
$vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_orden_venta_cantidad", null);

// se obtienen variables si es factura de item
$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_vta_factura_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_factura_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);

$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);

$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica", '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$txt_persona_descripcion = Gral::getVars(Gral::VARS_POST, "txt_persona_descripcion", '');
$cmb_gral_tipo_documento_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_documento_id", 0);
$txt_persona_documento = Gral::getVars(Gral::VARS_POST, "txt_persona_documento", '');
$txt_persona_email = Gral::getVars(Gral::VARS_POST, "txt_persona_email", '');

// se inicializa variable de configuracion 
$cv_importe_minimo_exigencia_info_comprador_consumidor_final = ConfVariable::getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal();

$cli_cliente = CliCliente::getOxId($cli_cliente_id);
if ($cli_cliente) {
    
} else {

    if (Ctrl::esVacio($txt_persona_descripcion)) {
        $arr["txt_persona_descripcion"] = Lang::_lang("Debe indicar un nombre", true);
        $arr["error"] = true;
    }
    /*
      if ($cmb_gral_tipo_documento_id == 0) {
      $arr["cmb_gral_tipo_documento_id"] = Lang::_lang("Debe indicar un tipo", true);
      $arr["error"] = true;
      }
      if (Ctrl::esVacio($txt_persona_documento)) {
      $arr["txt_persona_documento"] = Lang::_lang("Debe indicar un documento", true);
      $arr["error"] = true;
      }
     */
    if (Ctrl::esVacio($txt_persona_email)) {
        
    } else {
        if (!Ctrl::esEmail($txt_persona_email)) {
            $arr["txt_persona_email"] = Lang::_lang("Debe indicar un email valido", true);
            $arr["error"] = true;
        }
    }
}

$gral_condicion_iva = VtaFactura::getDeterminacionGralCondicionIva($cli_cliente_id);
//Gral::prr($gral_condicion_iva);
// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}
if ($gral_empresa_id == 0) {
    $arr["cmb_gral_empresa_id"] = Lang::_lang("Debe seleccionar una Empresa", true);
    $arr["error"] = true;
}
if ($gral_actividad_id == 0) {
    $arr["cmb_gral_actividad_id"] = Lang::_lang("Debe seleccionar una actividad", true);
    $arr["error"] = true;
}
if(!$vta_presupuesto_seleccionado){
    if ($cmb_gral_sucursal_id == 0) {
        $arr["cmb_gral_sucursal_id"] = Lang::_lang("Debe seleccionar una sucursal", true);
        $arr["error"] = true;
    }
}
if ($cli_centro_recepcion_id == 0) {
    $arr["cmb_cli_centro_recepcion_id"] = Lang::_lang("Debe seleccionar un centro de recepcion", true);
    $arr["error"] = true;
}
if ($gral_fp_forma_pago_id == 0) {
    $arr["cmb_gral_fp_forma_pago_id"] = Lang::_lang("Debe seleccionar una forma de pago", true);
    $arr["error"] = true;
}
if ($cmb_gral_fp_cuota_id == 0) {
    $arr["cmb_gral_fp_cuota_id"] = Lang::_lang("Debe seleccionar una condicion", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_nro_timbrado)) {
    $arr["txt_nro_timbrado"] = Lang::_lang("Debe ingresar un numero de timbrado", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_fecha_vencimiento)) {
    $arr["txt_fecha_vencimiento"] = Lang::_lang("Debe ingresar una fecha", true);
    $arr["error"] = true;
} else {
    $txt_fecha_vencimiento = Gral::getFechaToDB($txt_fecha_vencimiento);
    if (!Ctrl::esFechaValida($txt_fecha_vencimiento)) {
        $arr["txt_fecha_vencimiento"] = Lang::_lang("Debe ingresar una fecha valida", true);
        $arr["error"] = true;
    }elseif(!Date::esRangoValido(date('Y-m-d'), $txt_fecha_vencimiento)){
        $arr["txt_fecha_vencimiento"] = Lang::_lang("Debe ingresar una rango valido", true);
        $arr["error"] = true;        
    }
}
if ($vta_punto_venta_id == 0) {
    $arr["cmb_vta_punto_venta_id"] = Lang::_lang("Debe seleccionar un Punto de Venta", true);
    $arr["error"] = true;
}
if ($gral_condicion_iva && $gral_condicion_iva->getCodigo() != GralCondicionIva::TIPO_CONSUMIDOR_FINAL) {
    if (!$cli_cliente) {
        $arr["cmb_cli_cliente_id"] = Lang::_lang("Debe indicar un cliente", true);
        $arr["error"] = true;
    }
}

if (!Gral::getExisteConexionInternet($url = Gral::URL_AFIP_DOMINIO, $port = Gral::URL_AFIP_PUERTO)) {
    //$arr["generar_factura_online_afip"] = Lang::_lang("No se pudo establecer una conexion con AFIP para generar CAE del comprobante", true);
    //$arr["error"] = true;
}

// -----------------------------------------------------------------------------
// controles de facturas por orden venta
// -----------------------------------------------------------------------------
if ($tipo == 'orden-venta') {

    if (is_null($vta_orden_venta_ids)) {
        $arr["error_general"] = Lang::_lang("Debe seleccionar una Orden de Venta", true);
        $arr["error"] = true;
    }

    if (is_null($vta_orden_venta_cantidads)) {
        $arr["error_general"] .= Lang::_lang(" La cantidad es incorrecta", true);
        $arr["error"] = true;
    }

    foreach ($vta_orden_venta_cantidads as $vta_orden_venta_cantidad) {
        if ($vta_orden_venta_cantidad == 0) {
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

    if (is_null($cmb_vta_factura_concepto_ids)) {
        $arr["error_general"] .= Lang::_lang(" Debe seleccionar un concepto.", true);
        $arr["error"] = true;
    } else {
        foreach ($cmb_vta_factura_concepto_ids as $key => $cmb_vta_factura_concepto_id) {
            if ($cmb_vta_factura_concepto_id == '') {
                $arr["cmb_vta_factura_concepto_id_" . $key] = Lang::_lang("Debe seleccionar un tipo de concepto.", true);
                $arr["error"] = true;
            }
        }
    }
}


if (!$arr["error"]) {

    $ws_fe_param_tipo_concepto_id = 1;

    if ($tipo == 'orden-venta') {
        $vta_factura = VtaFactura::setInicializarVtaFacturaOrdenVenta($vta_presupuesto_seleccionado, $cmb_vta_preventista_id, $cmb_vta_comprador_id, $cmb_vta_vendedor_id, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id, $txt_persona_descripcion, $cmb_gral_tipo_documento_id, $txt_persona_documento, $txt_persona_email, $gral_empresa_id, $vta_punto_venta_id, $gral_fp_forma_pago_id, $cmb_gral_fp_cuota_id, $txt_nro_timbrado, $txt_fecha_vencimiento, $gral_actividad_id, $gral_escenario_id, $cli_centro_recepcion_id, $vta_tipo_factura_id = 0, $ws_fe_param_tipo_concepto_id = 1, $txa_nota_publica, $txa_observacion);
    }

    if ($tipo == 'item') {
        $vta_factura = VtaFactura::setInicializarVtaFacturaItem($cmb_gral_sucursal_id, $cmb_vta_preventista_id, $cmb_vta_comprador_id, $cmb_vta_vendedor_id, $gral_empresa_id, $vta_punto_venta_id, $gral_fp_forma_pago_id, $cmb_gral_fp_cuota_id, $txt_nro_timbrado, $txt_fecha_vencimiento, $gral_actividad_id, $gral_escenario_id, $cli_cliente_id, $txt_cantidads, $txt_descripcions, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids, $cmb_vta_factura_concepto_ids, $txa_nota_publica, $txa_observacion);
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>