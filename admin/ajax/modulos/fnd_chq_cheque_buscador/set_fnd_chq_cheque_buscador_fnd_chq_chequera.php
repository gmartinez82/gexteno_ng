<?php

include '_autoload.php';
//Gral::setVerErroresPHP();

$fnd_chq_tipo_emisor_id = Gral::getVars(Gral::VARS_POST, 'fnd_chq_tipo_emisor_id', 0);
$fnd_chq_chequera_id    = Gral::getVars(Gral::VARS_POST, 'fnd_chq_chequera_id', 0);

$arr['gral_banco_id']        = 0;
$arr['codigo_sucursal']      = '';
$arr['chequera_descripcion'] = '';
$arr['chequera_titular']     = '';

$fnd_chq_tipo_emisor = FndChqTipoEmisor::getOxId($fnd_chq_tipo_emisor_id);
if($fnd_chq_tipo_emisor)
{
    $arr['tipo_emisor'] = $fnd_chq_tipo_emisor->getCodigo();
}

$fnd_chq_chequera = FndChqChequera::getOxId($fnd_chq_chequera_id);
if($fnd_chq_chequera)
{
    $gral_banco_id        = $fnd_chq_chequera->getGralBancoId();
    $codigo_sucursal      = $fnd_chq_chequera->getCodigoSucursal();
    $chequera_titular     = $fnd_chq_chequera->getTitular();
    
    $arr['cmb_gral_banco_id']   = $gral_banco_id;
    $arr['txt_codigo_sucursal'] = $codigo_sucursal;
    $arr['txt_firmante']        = $chequera_titular;
}
else
{
    $arr['cmb_gral_banco_id']   = 0;
    $arr['txt_codigo_sucursal'] = '';
    $arr['txt_firmante']        = '';
}

$arr_json = json_encode($arr);
echo $arr_json;
?>