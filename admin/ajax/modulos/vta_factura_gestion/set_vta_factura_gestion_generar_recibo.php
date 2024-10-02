<?php

include "_autoload.php";

//-----------------------------------------------------------------------
// Caja
//-----------------------------------------------------------------------
$us_usuario = UsUsuario::autenticado();
$fnd_cajero = $us_usuario->getFndCajeroXFndCajeroUsUsuario();

// -----------------------------------------------------------------------------
// el ID se recibe por GET
// -----------------------------------------------------------------------------
$vta_factura_id = Gral::getVars(Gral::VARS_GET, "vta_factura_id", 0);
$vta_factura = VtaFactura::getOxId($vta_factura_id);


// -----------------------------------------------------------------------------
// se reciben datos via POST
// -----------------------------------------------------------------------------
$txt_fecha = Gral::getVars(Gral::VARS_POST, "txt_fecha", '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

if ($fnd_cajero) {
    $cmb_fnd_caja_id = Gral::getVars(Gral::VARS_POST, "cmb_fnd_caja_id", 0); // si es cajero, se controla que se elija caja  
} else {
    $cmb_fnd_caja_id = Gral::getVars(Gral::VARS_POST, "cmb_fnd_caja_id", null); // si no es cajero, no utiliza caja
}

$txt_fecha = Gral::getFechaToDB($txt_fecha);

// -----------------------------------------------------------------------------
// se reciben datos via POST de recibo item generico
// -----------------------------------------------------------------------------
$cmb_vta_recibo_item_generico_vta_recibo_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_recibo_item_generico_vta_recibo_concepto_id", null);
$txt_vta_recibo_item_generico_descripcions = Gral::getVars(Gral::VARS_POST, "txt_vta_recibo_item_generico_descripcion", null);
$txt_vta_recibo_item_generico_referencias = Gral::getVars(Gral::VARS_POST, "txt_vta_recibo_item_generico_referencia", null);
$txt_vta_recibo_item_generico_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_vta_recibo_item_generico_importe_unitario", null);
$cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_recibo_item_generico_gral_fp_forma_pago_id", null);

$modulo = Gral::getVars(Gral::VARS_POST, 'modulo', 0);
$var_sesion_random = Gral::getVars(Gral::VARS_POST, 'var_sesion_random', '');

$var_sesion_modulo_cheque = $modulo . '_cheque_info' . $var_sesion_random;
$var_sesion_modulo_retencion = $modulo . '_retencion_info' . $var_sesion_random;

$arr_vta_recibo_cheque_infos = Gral::getSes($var_sesion_modulo_cheque);
$arr_vta_recibo_retencion_infos = Gral::getSes($var_sesion_modulo_retencion);


// -----------------------------------------------------------------------------
// se realizan los controles de datos
// -----------------------------------------------------------------------------
$arr["error"] = false;

if ($fnd_cajero) {
    if ($cmb_fnd_caja_id == 0) {
        $arr["cmb_fnd_caja_id"] = Lang::_lang("Debe seleccionar una caja ", true);
        $arr["error"] = true;
    }
}

if (!Ctrl::esFechaValida($txt_fecha) || $txt_fecha == '1900-01-01') {
    $arr["txt_fecha"] = Lang::_lang("Debe ingresar una fecha valida", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
    $arr["error"] = true;
}

include Gral::getPathAbs() . 'admin/ajax/modulos/vta_recibo_item_generico/set_vta_recibo_item_generico_controles.php';


if (!$arr["error"]) {
        // ---------------------------------------------------------------------
        // Se genera el recibo
        // ---------------------------------------------------------------------
        if ($vta_factura) {
            $vta_recibo = VtaRecibo::setInicializarVtaReciboMultiItemDesdeFactura($vta_factura, $txt_fecha, $cmb_fnd_caja_id, $observacion = 'Cobro desde Factura - '.$txt_observacion, $cmb_vta_recibo_item_generico_vta_recibo_concepto_ids, $txt_vta_recibo_item_generico_descripcions, $txt_vta_recibo_item_generico_referencias, $txt_vta_recibo_item_generico_importe_unitarios, $cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids, $var_sesion_random);
        }
        
        // --------------------------------------------------------------------
        // se concilian la factura y el recibo
        // --------------------------------------------------------------------
        if ($vta_recibo) {
            $vta_factura_ids[] = $vta_factura->getId();
            $vta_recibo->setImputarVtaComprobante($recalcular_estado = true, null, $vta_factura_ids);
        }        
        
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>