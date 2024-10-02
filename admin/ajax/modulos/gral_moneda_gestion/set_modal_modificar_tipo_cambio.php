<?php

include "_autoload.php";

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$gral_moneda_id = Gral::getVars(Gral::VARS_GET, 'gral_moneda_id', 0, Gral::TIPO_INTEGER);
$gral_moneda_comparada_id = Gral::getVars(Gral::VARS_GET, 'gral_moneda_comparada', 0, Gral::TIPO_INTEGER);


// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$txt_fecha         = Gral::getVars(Gral::VARS_POST, 'txt_fecha', '', Gral::TIPO_STRING);
$txt_tipo_cambio  = Gral::getVars(Gral::VARS_POST, 'txt_tipo_cambio', '', Gral::TIPO_STRING);
$txt_coeficiente_ajuste  = Gral::getVars(Gral::VARS_POST, 'txt_coeficiente_ajuste', '', Gral::TIPO_STRING);
$txa_observacion  = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '', Gral::TIPO_STRING);

$gral_moneda = GralMoneda::getOxId($gral_moneda_id);
$gral_moneda_comparada = GralMoneda::getOxId($gral_moneda_comparada_id);

$txt_fecha = Gral::getFechaToDB($txt_fecha);
$txt_tipo_cambio = Gral::getImporteDesdePriceFormatToDB($txt_tipo_cambio);
$txt_coeficiente_ajuste = Gral::getImporteDesdePriceFormatToDB($txt_coeficiente_ajuste);

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------

$arr['error'] = false;

if ($txt_tipo_cambio == 0)
{
    $arr['txt_tipo_cambio'] = Lang::_lang('Debe ingresar un tipo de cambio', true);
    $arr['error'] = true;
}

if ($txt_coeficiente_ajuste == 0)
{
    $arr['txt_coeficiente_ajuste'] = Lang::_lang('Debe ingresar un coeficiente de ajuste', true);
    $arr['error'] = true;
}

if (Ctrl::esVacio($txa_observacion))
{
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang('Debe ingresar una observacion', true);
}

if (!$arr['error'])
{
    $gral_moneda->setActualizarTipoCambio($txt_fecha, $gral_moneda_comparada, $txt_tipo_cambio, $txt_coeficiente_ajuste, $txa_observacion);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;