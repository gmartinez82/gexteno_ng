<?php

include "_autoload.php";

$fnd_caja_id = Gral::getVars(Gral::VARS_POST, 'fnd_caja_id', 0, Gral::TIPO_INTEGER);
$fnd_caja = FndCaja::getOxId($fnd_caja_id);

$txt_gral_billete_ids = Gral::getVars(Gral::VARS_POST, 'txt_gral_billete_id', 0);
$txt_saldo_final = Gral::getVars(Gral::VARS_POST, 'txt_saldo_final', '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');

$tipo_ajuste = Gral::getVars(Gral::VARS_POST, 'tipo_ajuste', 0);
$chk_registrar_egreso_extraordinario_ajuste = Gral::getVars(Gral::VARS_POST, 'chk_registrar_egreso_extraordinario_ajuste', 0);
$chk_registrar_ingreso_extraordinario_ajuste = Gral::getVars(Gral::VARS_POST, 'chk_registrar_ingreso_extraordinario_ajuste', 0);

$saldo_final = Gral::getImporteDesdePriceFormatToDB($txt_saldo_final);
$arr['error'] = false;

$arr_resumen_caja = $fnd_caja->getArrResumenCaja();

// se obtiene el valor del efectivo existente en caja que deberia rendirse
$importe_total_efectivo_en_caja = $arr_resumen_caja['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['importe'];

$importe_billetes = 0;

foreach ($txt_gral_billete_ids as $txt_gral_billete_id => $cantidad) {
    $gral_billete = GralBillete::getOxId($txt_gral_billete_id);

    $importe_total_billete = $gral_billete->getImporte() * $cantidad;
    $importe_billetes += $importe_total_billete;
}

if($importe_total_efectivo_en_caja > 0){
    if($importe_billetes == 0){
        $arr['txt_gral_billete_general'] = Lang::_lang('Debe indicar el detalle de billetes', true);
        $arr['error'] = true;    
    }
}

if (!Ctrl::esNumero($saldo_final)){
    $arr['txt_saldo_final'] = Lang::_lang('Debe seleccionar un saldo final valido', true);
    $arr['error'] = true;
}

if (Ctrl::esVacio($txa_observacion)){
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
}

if($tipo_ajuste != 0){
    if($tipo_ajuste == 1){ // egreso
        if($chk_registrar_egreso_extraordinario_ajuste == 0){
            $arr["error"] = true;
            $arr["chk_registrar_egreso_extraordinario_ajuste"] = Lang::_lang("Debe autorizar egreso extraordinario", true);
        }
    }elseif($tipo_ajuste == 2){ // ingreso
        if($chk_registrar_ingreso_extraordinario_ajuste == 0){
            $arr["error"] = true;
            $arr["chk_registrar_ingreso_extraordinario_ajuste"] = Lang::_lang("Debe autorizar ingreso extraordinario", true);
        }        
    }
}

//Gral::prr($cbr_cobrador);
if (!$arr['error'])
{
    $fnd_caja->setCerrarCaja($txt_gral_billete_ids, $saldo_final, $txa_observacion, $chk_registrar_egreso_extraordinario_ajuste, $chk_registrar_ingreso_extraordinario_ajuste);
}

$arr_json = json_encode($arr);
echo $arr_json;
?>