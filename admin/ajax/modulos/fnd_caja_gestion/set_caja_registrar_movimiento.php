<?php

include '_autoload.php';
//Gral::setVerErroresPHP();

//$arr_fnd_caja_movimiento_cheque_infos = Gral::getSes('fnd_caja_movimiento_cheque_info');

$fnd_caja_movimiento_id      = Gral::getVars(Gral::VARS_POST, 'fnd_caja_movimiento_id', 0);
$fnd_caja_origen_id          = Gral::getVars(Gral::VARS_POST, 'fnd_caja_origen_id', 0);
$fnd_caja_destino_id         = Gral::getVars(Gral::VARS_POST, 'fnd_caja_destino_id', 0);
$txa_observacion             = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');
$vta_punto_venta_id          = Gral::getVars(Gral::VARS_POST, 'cmb_vta_punto_venta_id', 0);
$gral_empresa_id             = Gral::getVars(Gral::VARS_POST, 'cmb_gral_empresa_id', 0);
$txt_descripcions            = Gral::getVars(Gral::VARS_POST, 'txt_descripcion', null);
$txt_referencias             = Gral::getVars(Gral::VARS_POST, 'txt_referencia', null);
$txt_importe_unitarios       = Gral::getVars(Gral::VARS_POST, 'txt_importe_unitario', null);
$cmb_gral_fp_forma_pago_ids  = Gral::getVars(Gral::VARS_POST, 'cmb_gral_fp_forma_pago_id', null);
$modulo                      = Gral::getVars(Gral::VARS_POST, 'modulo', 0);
$var_sesion_random           = Gral::getVars(Gral::VARS_POST, 'var_sesion_random', '');

$var_sesion_modulo           = $modulo.'_cheque_info'.$var_sesion_random;

$arr_fnd_caja_movimiento_cheque_infos = Gral::getSes($var_sesion_modulo);

// se realizan los controles de datos
$arr['error'] = false;

if ($fnd_caja_destino_id == 0) {
    $arr['cmb_fnd_caja_id'] = Lang::_lang('Seleccionar una caja destino', true);
    $arr['error'] = true;
}


if (is_null($txt_descripcions)) {
    $arr['error_general'] = Lang::_lang('Agregue una descripcion del Item', true);
    $arr['error'] = true;
}
else
{
    foreach ($txt_descripcions as $key => $txt_descripcion) {
        if ($txt_descripcion == '') {
            $arr['txt_descripcion_' . $key] = Lang::_lang('Agregue una descripcion del Item', true);
            $arr['error'] = true;
        }
    }
}

if (is_null($txt_referencias))
{
    $arr['error_general'] = Lang::_lang('Agregue una referencia del Item', true);
    $arr['error'] = true;
}
else
{
    foreach ($txt_referencias as $key => $txt_referencia)
    {
        if ($cmb_gral_fp_forma_pago_ids[$key] != '')
        {
            $gral_fp_forma_pago_cheque = GralFpFormaPago::getOxId($cmb_gral_fp_forma_pago_ids[$key]);
            if($gral_fp_forma_pago_cheque)
            {
                if($gral_fp_forma_pago_cheque->getRequiereReferencia() == 1)
                {
                    if ($txt_referencia == '')
                    {
                        $arr['txt_referencia_' . $key] = Lang::_lang('Agregue un codigo de referencia', true);
                        $arr['error'] = true;
                    }
                }
            }
        }
    }
}


if (is_null($txt_importe_unitarios)) {
    $arr['error_general'] .= Lang::_lang('El importe es incorrecto', true);
    $arr['error'] = true;
}
else
{
    foreach ($txt_importe_unitarios as $key => $txt_importe_unitario) {
        
        $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);
        
        if ($txt_importe_unitario == 0) {
            $arr['txt_importe_unitario_' . $key] = Lang::_lang('Importe invalido', true);
            $arr['error'] = true;
        }
        elseif (!Ctrl::esNumero($txt_importe_unitario)) {
            $arr['txt_importe_unitario_' . $key] = Lang::_lang('Importe invalido', true);
            $arr['error'] = true;
        }
    }
}

if (is_null($cmb_gral_fp_forma_pago_ids)) {
    $arr['error_general'] .= Lang::_lang('Seleccionar forma de pago', true);
    $arr['error'] = true;
}
else
{
    foreach ($cmb_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
        if ($cmb_gral_fp_forma_pago_id == '') {
            $arr['cmb_gral_fp_forma_pago_id_' . $key] = Lang::_lang('Seleccionar forma de pago', true);
            $arr['error'] = true;
        }
    }
}

// se controla que exista un registro por cada forma de pago cheque
$gral_fp_forma_pago_cheque = GralFpFormaPago::getOxCodigo('CHEQUE');

foreach ($cmb_gral_fp_forma_pago_ids as $key => $cmb_gral_fp_forma_pago_id) {
    if ($cmb_gral_fp_forma_pago_id == $gral_fp_forma_pago_cheque->getId()) {
        if (is_null($arr_fnd_caja_movimiento_cheque_infos[$key])) {
            $arr['cmb_gral_fp_forma_pago_id_' . $key] = Lang::_lang('Indique los datos del Cheque', true);
            $arr['error'] = true;
        }
    }
}

if (Ctrl::esVacio($txa_observacion))
{
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
}


if (!$arr['error'])
{
    $fnd_caja_tipo_movimiento = FndCajaTipoMovimiento::getOxCodigo(FndCajaTipoMovimiento::TIPO_OPERACION_ENTRE_CAJAS);
    FndCajaMovimiento::setInicializarFndCajaMovimiento($fnd_caja_movimiento_id, $fnd_caja_origen_id, $fnd_caja_destino_id, $fnd_caja_tipo_movimiento->getId(), $txa_observacion, $var_sesion_random, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $cmb_gral_fp_forma_pago_ids);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>