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

$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$pde_centro_pedido_id = Gral::getVars(Gral::VARS_POST, "cmb_pde_centro_pedido_id", 0);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$var_sesion_random = Gral::getVars(Gral::VARS_POST, "var_sesion_random", '');
$txt_tributo_importes = Gral::getVars(Gral::VARS_POST, "txt_tributo_importe", 0);
$txt_tributo_fechas = Gral::getVars(Gral::VARS_POST, "txt_tributo_fecha", '');
$txt_tributo_numeros = Gral::getVars(Gral::VARS_POST, "txt_tributo_numero", '');

$txt_p1_comprobante_total_saldo = Gral::getVars(Gral::VARS_POST, "txt_p1_comprobante_total_saldo", 0);
$txt_p1_comprobante_total_importe_imponible = Gral::getVars(Gral::VARS_POST, "txt_p1_comprobante_total_importe_imponible", 0);

foreach($txt_tributo_fechas as $i => $txt_tributo_fecha){
    $txt_tributo_fechas_db[$i] = Gral::getFechaToDB($txt_tributo_fecha);
}

// se realizan los controles de datos
$arr["error"] = false;

if ($prv_proveedor_id == 0) {
    $arr["cmb_prv_proveedor_id"] = Lang::_lang("Debe indicar un proveedor", true);
    $arr["error"] = true;
}
if ($gral_empresa_id == 0) {
    $arr["cmb_gral_empresa_id"] = Lang::_lang("Debe seleccionar una Empresa", true);
    $arr["error"] = true;
}
if ($pde_centro_pedido_id == 0) {
    $arr["cmb_pde_centro_pedido_id"] = Lang::_lang("Debe seleccionar un Centro de Pedido", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

// -----------------------------------------------------------------------------
// controles de comprobantes seleccionados
// -----------------------------------------------------------------------------
if (is_null($chk_pde_comprobantes)) {
    //$arr["error_general"] = Lang::_lang("Debe seleccionar un comprobante", true);
    //$arr["error"] = true;
}

// -----------------------------------------------------------------------------
// controles de formas de pago seleccionadas
// -------------------------------------------------------------------------
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

if (!$arr["error"]) {
    $pde_orden_pago = PdeOrdenPago::setInicializarPdeOrdenPago($prv_proveedor_id, $var_sesion_random, $chk_pde_comprobantes, $txt_pde_comprobante_importe_saldos, $hdn_pde_comprobante_classs, $cmb_gral_fp_forma_pago_ids, $txt_descripcions, $txt_importe_unitarios, $gral_empresa_id, $pde_centro_pedido_id, $txa_observacion, $txt_tributo_importes, $txt_tributo_fechas_db, $txt_tributo_numeros, $txt_p1_comprobante_total_importe_imponible);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>