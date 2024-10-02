<?php

include "_autoload.php";

$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();

// -----------------------------------------------------------------------------
// se recibe el identificador de cliente
// -----------------------------------------------------------------------------
$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);

// -----------------------------------------------------------------------------
// se reciben el resto de los valores enviados via POST
// -----------------------------------------------------------------------------
$cmb_vta_tipo_ajuste_haber_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_tipo_ajuste_haber_id", 0);
$cmb_vta_tipo_origen_ajuste_haber_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_tipo_origen_ajuste_haber_id", 0);
$cmb_vta_preventista_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_preventista_id", null);
$cmb_vta_ajuste_haber_condicion_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_ajuste_haber_condicion_pago_id", 0);
$cmb_vta_ajuste_haber_tipo_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_ajuste_haber_tipo_pago_id", 0);

$vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);
$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);

if ($fnd_cajero) {
    $cmb_fnd_caja_id = Gral::getVars(Gral::VARS_POST, "cmb_fnd_caja_id", 0); // si es cajero, se controla que se elija caja  
} else {
    $cmb_fnd_caja_id = Gral::getVars(Gral::VARS_POST, "cmb_fnd_caja_id", null); // si no es cajero, no utiliza caja
}

$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_referencias = Gral::getVars(Gral::VARS_POST, "txt_referencia", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);
$cmb_vta_ajuste_haber_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_ajuste_haber_concepto_id", null);

$txt_fecha = Gral::getVars(Gral::VARS_POST, "txt_fecha", '');
$txt_codigo_op_cliente = Gral::getVars(1, "txt_codigo_op_cliente", '');
$txa_nota_interna = Gral::getVars(Gral::VARS_POST, "txa_nota_interna", '');
$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica", '');

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$var_sesion_random = Gral::getVars(Gral::VARS_POST, "var_sesion_random", '');

// se realizan los controles de datos
$arr["error"] = false;

if ($cmb_vta_tipo_ajuste_haber_id == 0) {
    $arr["cmb_vta_tipo_ajuste_haber_id"] = Lang::_lang("Debe seleccionar un Tipo de Ajuste Haber", true);
    $arr["error"] = true;
}
if ($cmb_vta_tipo_origen_ajuste_haber_id == 0) {
    $arr["cmb_vta_tipo_origen_ajuste_haber_id"] = Lang::_lang("Debe seleccionar un Tipo de Origen", true);
    $arr["error"] = true;
}
if ($cli_cliente_id == 0) {
    $arr["cmb_cli_cliente_id"] = Lang::_lang("Debe seleccionar un cliente", true);
    $arr["error"] = true;
}

if ($cmb_vta_ajuste_haber_condicion_pago_id == 0) {
    $arr["cmb_vta_ajuste_haber_condicion_pago_id"] = Lang::_lang("Debe seleccionar una condicion de pago", true);
    $arr["error"] = true;
}
if ($cmb_vta_ajuste_haber_tipo_pago_id == 0) {
    $arr["cmb_vta_ajuste_haber_tipo_pago_id"] = Lang::_lang("Debe seleccionar un tipo de pago", true);
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

if ($fnd_cajero) {
    if ($cmb_fnd_caja_id == 0) {
        $arr["cmb_fnd_caja_id"] = Lang::_lang("Debe seleccionar una caja", true);
        $arr["error"] = true;
    }
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe agregar una observacion", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_fecha)) {
    $arr["txt_fecha"] = Lang::_lang("Debe ingresar una fecha valida", true);
    $arr["error"] = true;
} else {
    $txt_fecha = Gral::getFechaToDB($txt_fecha);
    if (!Ctrl::esFechaValida($txt_fecha)) {
        $arr["txt_fecha"] = Lang::_lang("Debe ingresar una fecha valida", true);
        $arr["error"] = true;
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

if (is_null($cmb_vta_ajuste_haber_concepto_ids)) {
    $arr["error_general"] .= Lang::_lang(" Debe seleccionar un concepto de pago.", true);
    $arr["error"] = true;
} else {
    foreach ($cmb_vta_ajuste_haber_concepto_ids as $key => $cmb_vta_ajuste_haber_concepto_id) {
        if ($cmb_vta_ajuste_haber_concepto_id == '') {
            $arr["cmb_vta_ajuste_haber_concepto_id_" . $key] = Lang::_lang("Debe seleccionar un concepto de pago valida", true);
            $arr["error"] = true;
        }
    }
}

if (!$arr["error"]) {

    $vta_ajuste_haber = VtaAjusteHaber::setInicializarVtaAjusteHaberItem($cmb_vta_tipo_ajuste_haber_id, $cmb_vta_tipo_origen_ajuste_haber_id, $txt_fecha, $cmb_vta_preventista_id, $cmb_vta_ajuste_haber_condicion_pago_id, $cmb_vta_ajuste_haber_tipo_pago_id, $gral_empresa_id, $vta_punto_venta_id, $cmb_fnd_caja_id, $cli_cliente_id, $txt_codigo_op_cliente, $txa_nota_interna, $txa_nota_publica, $var_sesion_random, $txt_cantidads, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids, $cmb_gral_fp_forma_pago_ids, $cmb_vta_ajuste_haber_concepto_ids, $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>