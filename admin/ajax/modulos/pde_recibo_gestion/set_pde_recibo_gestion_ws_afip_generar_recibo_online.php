<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();

$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);
$cmb_pde_recibo_condicion_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_pde_recibo_condicion_pago_id", 0);
$cmb_pde_recibo_tipo_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_pde_recibo_tipo_pago_id", 0);

$pde_centro_pedido_id = Gral::getVars(Gral::VARS_POST, "cmb_pde_centro_pedido_id", 0);
$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);

if ($fnd_cajero) {
    $cmb_fnd_caja_id = Gral::getVars(Gral::VARS_POST, "cmb_fnd_caja_id", 0); // si es cajero, se controla que se elija caja  
} else {
    $cmb_fnd_caja_id = Gral::getVars(Gral::VARS_POST, "cmb_fnd_caja_id", null); // si no es cajero, no utiliza caja
}

$txt_fecha = Gral::getVars(Gral::VARS_POST, "txt_fecha", '');
$txt_nro_punto_venta = Gral::getVars(Gral::VARS_POST, "txt_nro_punto_venta");
$txt_nro_comprobante = Gral::getVars(Gral::VARS_POST, "txt_nro_comprobante");

//$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_referencias = Gral::getVars(Gral::VARS_POST, "txt_referencia", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);
$cmb_pde_recibo_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_pde_recibo_concepto_id", null);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$var_sesion_random = Gral::getVars(Gral::VARS_POST, "var_sesion_random", '');

// se realizan los controles de datos
$arr["error"] = false;

if ($prv_proveedor_id == 0) {
    $arr["cmb_prv_proveedor_id"] = Lang::_lang("Debe seleccionar un cliente", true);
    $arr["error"] = true;
}
if ($cmb_pde_recibo_condicion_pago_id == 0) {
    $arr["cmb_pde_recibo_condicion_pago_id"] = Lang::_lang("Debe seleccionar una condicion de pago", true);
    $arr["error"] = true;
}
if ($cmb_pde_recibo_tipo_pago_id == 0) {
    $arr["cmb_pde_recibo_tipo_pago_id"] = Lang::_lang("Debe seleccionar un tipo de pago", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_fecha)) {
    $arr["txt_fecha"] = Lang::_lang("Debe ingresar una fecha valida", true);
    $arr["error"] = true;
} elseif (!Ctrl::esFechaValida(Gral::getFechaToDB($txt_fecha))) {
    $arr["txt_fecha"] = Lang::_lang("Debe ingresar una fecha valida", true);
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
        $arr["txt_nro_comprobante"] = Lang::_lang("Debe ingresar un nro de comprobante valido, por ejemplo 00154578", true);
        $arr["error"] = true;
    }
}

// se controla existencia de numero de comprobante para el mismo proveedor
$pde_comprobante_existente = PdeRecibo::getPdeReciboXProveedorYNumero($prv_proveedor_id, $txt_nro_punto_venta . '-' . $txt_nro_comprobante);
if ($pde_comprobante_existente) {
    $arr["txt_nro_comprobante"] = Lang::_lang("El numero de comprobante indicado ya fue cargado para el proveedor seleccionado el dia " . Gral::getFechaHoraToWeb($pde_comprobante_existente->getCreado()) . ' por ' . $pde_comprobante_existente->getCreadoPorDescripcion(), true);
    $arr["error"] = true;
}

if ($gral_empresa_id == 0) {
    $arr["cmb_gral_empresa_id"] = Lang::_lang("Debe seleccionar una empresa facturadora", true);
    $arr["error"] = true;
}
if ($pde_centro_pedido_id == 0) {
    $arr["cmb_pde_centro_pedido_id"] = Lang::_lang("Debe seleccionar un punto de venta", true);
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

$importe_total_comprobante_efectivo = 0;
$importe_total_caja_efectivo = 0;

if (is_null($cmb_gral_fp_forma_pago_ids)) {
    $arr["error_general"] .= Lang::_lang(" Debe seleccionar una forma de pago", true);
    $arr["error"] = true;
} else {
    foreach ($cmb_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
        if ($cmb_gral_fp_forma_pago_id == '') {
            $arr["cmb_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Debe seleccionar una forma de pago valida", true);
            $arr["error"] = true;
        } else {
            $gral_fp_forma_pago_cheque = GralFpFormaPago::getOxCodigo(GralFpFormaPago::TIPO_EFECTIVO);
            if ($gral_fp_forma_pago_cheque->getId() == $cmb_gral_fp_forma_pago_id) {
                $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitarios[$key]);
                $importe_total_comprobante_efectivo += $txt_importe_unitario;
            }
        }
    }

    /*
    if ($cmb_fnd_caja_id != 0) {
        $fnd_caja = FndCaja::getOxId($cmb_fnd_caja_id);
        if ($fnd_caja) {
            $arr_resumen_caja = $fnd_caja->getArrResumenCaja();

            $importe_total_caja_efectivo = $arr_resumen_caja['forma_pago'][GralFpFormaPago::TIPO_EFECTIVO]['importe'];
            if ($importe_total_caja_efectivo < $importe_total_comprobante_efectivo) {
                $arr["div_info_fnd_caja_importe"] = Lang::_lang("El importe en efectivo de caja $" . $importe_total_caja_efectivo . " es menor al importe cargado $" . $importe_total_comprobante_efectivo, true);
                $arr["error"] = true;
            }
        }
    }
    */
}

if (is_null($cmb_pde_recibo_concepto_ids)) {
    $arr["error_general"] .= Lang::_lang(" Debe seleccionar un concepto de pago.", true);
    $arr["error"] = true;
} else {
    foreach ($cmb_pde_recibo_concepto_ids as $key => $cmb_pde_recibo_concepto_id) {
        if ($cmb_pde_recibo_concepto_id == '') {
            $arr["cmb_pde_recibo_concepto_id_" . $key] = Lang::_lang("Debe seleccionar un concepto de pago valida", true);
            $arr["error"] = true;
        }
    }
}

if (!$arr["error"]) {
    $txt_fecha = Gral::getFechaToDB($txt_fecha);

    $pde_recibo = PdeRecibo::setInicializarPdeReciboItem($gral_empresa_id, $pde_centro_pedido_id, $cmb_fnd_caja_id, $prv_proveedor_id, $cmb_pde_recibo_condicion_pago_id, $cmb_pde_recibo_tipo_pago_id, $var_sesion_random, $txt_fecha, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_cantidads, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids, $cmb_gral_fp_forma_pago_ids, $cmb_pde_recibo_concepto_ids, $txa_observacion);
    //unset($_SESSION['pde_recibo_cheque_info']);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>
