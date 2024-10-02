<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

// ------------------------------------------------------------------------------
// se obtienen los comisionistas
// ------------------------------------------------------------------------------
$cmb_vta_preventista_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_preventista_id', 0);
$cmb_vta_comprador_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_comprador_id', 0);
$cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_vendedor_id', 0);

// ------------------------------------------------------------------------------
// se obtienen comprobantes
// ------------------------------------------------------------------------------
$chk_vta_comprobantes = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante", null);
$hdn_importe_base_comisionables = Gral::getVars(Gral::VARS_POST, "hdn_importe_base_comisionable", 0);
$txt_porcentaje_comisions = Gral::getVars(Gral::VARS_POST, "txt_porcentaje_comision", 0);
$hdn_importe_comisions = Gral::getVars(Gral::VARS_POST, "hdn_importe_comision", 0);
$hdn_vta_comprobante_classs = Gral::getVars(Gral::VARS_POST, "hdn_vta_comprobante_class", null);

// ------------------------------------------------------------------------------
// se obtienen formas de pago
// ------------------------------------------------------------------------------
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$modulo                         = Gral::getVars(Gral::VARS_POST, 'modulo', 0);
$var_sesion_random              = Gral::getVars(Gral::VARS_POST, 'var_sesion_random', '');

$var_sesion_modulo               = $modulo.'_cheque_info'.$var_sesion_random;
$arr_vta_comision_cheque_infos = Gral::getSes($var_sesion_modulo);

$arr["error"] = false;

if (count($chk_vta_comprobantes) == 0) {
    $arr["error_general"] .= Lang::_lang("Debe seleccionar al menos un comprobante", true).'<br />';
    $arr["error"] = true;
}else{
    
}

if (count($cmb_gral_fp_forma_pago_ids) == 0) {
    $arr["error_general"] .= Lang::_lang("Debe seleccionar al menos una forma de pago", true).'<br />';
    $arr["error"] = true;
}else{
    foreach ($cmb_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
        if ($cmb_gral_fp_forma_pago_id == '') {
            $arr["cmb_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Seleccionar forma de pago", true);
            $arr["error"] = true;
        }
    }
}

// Se controla que exista un registro por cada forma de pago cheque
$gral_fp_forma_pago_cheque = GralFpFormaPago::getOxCodigo(GralFpFormaPago::TIPO_CHEQUE);

if ($gral_fp_forma_pago_cheque) {
    foreach ($cmb_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
        if ($cmb_gral_fp_forma_pago_id == $gral_fp_forma_pago_cheque->getId()) {
            if (is_null($arr_vta_comision_cheque_infos[$key])) {
                $arr["cmb_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Indique los datos del Cheque", true);
                $arr["error"] = true;
            }
        }
    }
}

if (is_array($chk_vta_comprobantes) && count($chk_vta_comprobantes) > 0) {
    foreach ($chk_vta_comprobantes as $i => $chk_vta_comprobante) {
        $hdn_importe_comision = $hdn_importe_comisions[$i];
        //$hdn_importe_comision = Gral::getImporteDesdePriceFormatToDB($hdn_importe_comision);
        $importe_total_comision += $hdn_importe_comision;
    }
}
if (is_array($txt_importe_unitarios) && count($txt_importe_unitarios) > 0) {
    foreach ($txt_importe_unitarios as $i => $txt_importe_unitario) {
        $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);
        $importe_total += $txt_importe_unitario;
    }
    $importe_total_saldo = $importe_total_comision - $importe_total;
}

if (abs(round($importe_total_saldo, 0)) > 0) {
    $arr["error_general"] .= Lang::_lang("El importe total de los comprobantes no puede ser menor que el de la comision", true).'<br />';
    $arr["error"] = true;
}

if ($txa_observacion == '') {
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    VtaComision::setInicializarVtaComision(
            $cmb_vta_preventista_id, $cmb_vta_comprador_id, $cmb_vta_vendedor_id, $var_sesion_random, $chk_vta_comprobantes, $hdn_importe_base_comisionables, $txt_porcentaje_comisions, $hdn_importe_comisions, $hdn_vta_comprobante_classs, $cmb_gral_fp_forma_pago_ids, $txt_descripcions, $txt_importe_unitarios, $txa_observacion
    );
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>