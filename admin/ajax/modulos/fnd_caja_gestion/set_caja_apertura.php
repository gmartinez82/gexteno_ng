<?php

include "_autoload.php";

$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();
$fnd_caja_abierta = $fnd_cajero->getFndCajaAbierta();

$gral_caja_id                   = Gral::getVars(Gral::VARS_POST, 'cmb_gral_caja_id', 0);

$importe_saldo_inicial_esperado = Gral::getVars(Gral::VARS_POST, 'hdn_saldo_inicial_esperado', 0);
$importe_saldo_inicial_real     = Gral::getVars(Gral::VARS_POST, 'txt_saldo_inicial_real', 0);

$importe_saldo_inicial_real = Gral::getImporteDesdePriceFormatToDB($importe_saldo_inicial_real);


$arr['error'] = false;

if ($gral_caja_id == 0){
    $arr['cmb_gral_caja_id'] = Lang::_lang('Debe seleccionar una caja', true);
    $arr['error'] = true;
}

if (!Ctrl::esNumero($importe_saldo_inicial_real)){
    $arr['txt_saldo_inicial_real'] = Lang::_lang('Debe seleccionar un saldo inicial valido', true);
    $arr['error'] = true;
}


if(!$fnd_cajero )
{
    $arr['error'] = true;
    $arr['error_general'] = Lang::_lang('No es Cajero', true);
}

if($fnd_caja_abierta)
{
    //$arr['error'] = true;
    $arr['error_general'] = Lang::_lang('El cajero ya tiene una caja abierta', true);
}


//Gral::prr($fnd_caja_abierta);
if (!$arr['error'] )
{
    //$fnd_cajero->setInicializarCaja($gral_caja_id, $importe_saldo_inicial_esperado, $importe_saldo_inicial_real);
    FndCaja::setInicializarCaja($fnd_cajero->getId(), $gral_caja_id, $importe_saldo_inicial_esperado, $importe_saldo_inicial_real);
}

$arr_json = json_encode($arr);
echo $arr_json;
?>