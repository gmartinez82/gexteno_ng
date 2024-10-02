<?php
include "_autoload.php";

// ------------------------------------------------------------------------------
// se obtienen los comisionistas
// ------------------------------------------------------------------------------
$cmb_vta_preventista_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_preventista_id', 0);
$cmb_vta_comprador_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_comprador_id', 0);
$cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_vendedor_id', 0);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$txt_porcentaje_valor = Gral::getVars(Gral::VARS_POST, "txt_porcentaje_valor", 0); 
$txa_porcentaje_observacion = Gral::getVars(Gral::VARS_POST, "txa_porcentaje_observacion", '', Gral::TIPO_STRING); 

$txt_porcentaje_valor = str_replace(',', '.', $txt_porcentaje_valor);

// ------------------------------------------------------------------
// se obtienen comprobantes
// ------------------------------------------------------------------
$chk_vta_comprobantes = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante", null);
$hdn_importe_base_comisionables = Gral::getVars(Gral::VARS_POST, "hdn_importe_base_comisionable", 0);
$txt_porcentaje_comisions = Gral::getVars(Gral::VARS_POST, "txt_porcentaje_comision", 0);
$hdn_importe_comisions = Gral::getVars(Gral::VARS_POST, "hdn_importe_comision", 0);
$hdn_vta_comprobante_classs = Gral::getVars(Gral::VARS_POST, "hdn_vta_comprobante_class", null);


// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if (count($chk_vta_comprobantes) == 0) {
    $arr["div_comprobantes"] = Lang::_lang("Debe seleccionar al menos 1 comprobante", true);
    $arr["error"] = true;
}

if ($txt_porcentaje_valor <= 0) {
    $arr["txt_porcentaje_valor"] = Lang::_lang("Debe ingresar un porcentaje mayor a cero", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_porcentaje_observacion)) {
    $arr["txa_porcentaje_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}


if (!$arr["error"]) {
    VtaComision::setModificarPorcentajesDeComprobantes($cmb_vta_preventista_id, $cmb_vta_comprador_id, $cmb_vta_vendedor_id, $chk_vta_comprobantes, $hdn_vta_comprobante_classs, $txt_porcentaje_valor, $txa_porcentaje_observacion);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;