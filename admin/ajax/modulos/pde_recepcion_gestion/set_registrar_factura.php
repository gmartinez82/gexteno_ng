<?php

include "_autoload.php";

$pde_recepcion_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_recepcions", null);
$gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$gral_fp_forma_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", 0);
$txt_fecha = Gral::getVars(Gral::VARS_POST, "txt_fecha", '');
$txt_nro_punto_venta = Gral::getVars(Gral::VARS_POST, "txt_nro_punto_venta", '');
$txt_nro_factura = Gral::getVars(Gral::VARS_POST, "txt_nro_factura", '');

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$txt_fecha_db = Gral::getFechaToDB($txt_fecha);

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
if ($gral_fp_forma_pago_id == 0) {
    $arr["cmb_gral_fp_forma_pago_id"] = Lang::_lang("Debe seleccionar una Forma de Pago", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_fecha) || !Ctrl::esFechaValida($txt_fecha_db)) {
    $arr["txt_fecha"] = Lang::_lang("Debe ingresar una fecha valida", true);
    $arr["error"] = true;
}
if (!Ctrl::esNumeroEntero($txt_nro_punto_venta)) {
    $arr["txt_nro_punto_venta"] = Lang::_lang("Debe ingresar pto de venta", true);
    $arr["error"] = true;
}
if (!Ctrl::esNumeroEntero($txt_nro_factura)) {
    $arr["txt_nro_factura"] = Lang::_lang("Debe ingresar numero de factura", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>