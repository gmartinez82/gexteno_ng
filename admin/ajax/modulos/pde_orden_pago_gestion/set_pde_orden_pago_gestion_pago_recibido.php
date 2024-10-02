<?php

include_once '_autoload.php';

$pde_orden_pago_id = Gral::getVars(Gral::VARS_POST, 'pde_orden_pago_id', 0);
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

$cmb_pde_recibo_condicion_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_pde_recibo_condicion_pago_id", 0);
$cmb_pde_recibo_tipo_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_pde_recibo_tipo_pago_id", 0);

$txt_fecha = Gral::getVars(Gral::VARS_POST, "txt_fecha", '');
$txt_nro_punto_venta = Gral::getVars(Gral::VARS_POST, "txt_nro_punto_venta");
$txt_nro_comprobante = Gral::getVars(Gral::VARS_POST, "txt_nro_comprobante");

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

$prv_proveedor_id = $pde_orden_pago->getPrvProveedorId();

// control de datos
$arr["error"] = false;

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
}elseif (!Ctrl::esFechaValida(Gral::getFechaToDB ($txt_fecha))) {
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
        $arr["txt_nro_comprobante"] = Lang::_lang("Debe ingresar un nro de comprobante valido, por ejemplo 0154578", true);
        $arr["error"] = true;
    }
}

// -----------------------------------------------------------------------------
// se controla existencia de numero de comprobante para el mismo proveedor
// -----------------------------------------------------------------------------
$pde_comprobante_existente = PdeRecibo::getPdeReciboXProveedorYNumero($prv_proveedor_id, $txt_nro_punto_venta . '-' . $txt_nro_comprobante);
if ($pde_comprobante_existente) {
    $arr["txt_nro_comprobante"] = "El numero de comprobante indicado ya fue cargado para el proveedor seleccionado el dia ".Gral::getFechaHoraToWeb($pde_comprobante_existente->getCreado()).' por '.$pde_comprobante_existente->getCreadoPorDescripcion();
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
}

if (!$arr["error"]) {
    
    $pde_recibo = PdeRecibo::setInicializarPdeReciboXPdeOrdenPago($pde_orden_pago_id, $cmb_pde_recibo_condicion_pago_id, $cmb_pde_recibo_tipo_pago_id, $txt_fecha, $txt_nro_punto_venta, $txt_nro_comprobante, $txa_observacion);

    // -------------------------------------------------------------------------
    // actualizan estados de comprobantes
    // -------------------------------------------------------------------------
    $pde_recibo->setRecalcularEstado($recursivo = true);
    
    // -------------------------------------------------------------------------
    // se registra nuevo estado
    // -------------------------------------------------------------------------
    $pde_orden_pago_estado = $pde_orden_pago->setPdeOrdenPagoEstado(
            PdeOrdenPagoTipoEstado::TIPO_PAGO_RECIBIDO, $txa_observacion
    );
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>