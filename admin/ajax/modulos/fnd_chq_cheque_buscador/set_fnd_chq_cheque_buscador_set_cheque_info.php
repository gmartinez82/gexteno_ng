<?php

include '_autoload.php';

$modulo    = Gral::getVars(Gral::VARS_POST, 'modulo', 0);
$key       = Gral::getVars(Gral::VARS_POST, 'key', -1);
$cheque_id = Gral::getVars(Gral::VARS_POST, 'cheque_id', 0);

$cmb_fnd_chq_chequera_id     = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_chequera_id', null);
$cmb_gral_banco_id           = Gral::getVars(Gral::VARS_POST, 'cmb_gral_banco_id', 0);
$txt_codigo_sucursal         = Gral::getVars(Gral::VARS_POST, 'txt_codigo_sucursal', '');
$txt_descripcion             = Gral::getVars(Gral::VARS_POST, 'txt_descripcion', '');
$txt_firmante                = Gral::getVars(Gral::VARS_POST, 'txt_firmante', '');
$txt_entregador              = Gral::getVars(Gral::VARS_POST, 'txt_entregador', '');
$txt_numero_cheque           = Gral::getVars(Gral::VARS_POST, 'txt_numero_cheque', '');
$txt_importe_cheque          = Gral::getVars(Gral::VARS_POST, 'txt_importe_cheque', '');
$txt_fecha_emision           = Gral::getVars(Gral::VARS_POST, 'txt_fecha_emision', '');
$txt_fecha_cobro             = Gral::getVars(Gral::VARS_POST, 'txt_fecha_cobro', '');
$cmb_fnd_chq_tipo_emisor_id  = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_tipo_emisor_id', 0);
$cmb_fnd_chq_tipo_emision_id = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_tipo_emision_id', 0);
$cmb_fnd_chq_tipo_pago_id    = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_tipo_pago_id', 0);
$cmb_fnd_chq_cruzado         = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_cruzado', -1);
$txa_observacion             = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');
$var_sesion_random           = Gral::getVars(Gral::VARS_POST, 'var_sesion_random', '');
//Gral::prr($_POST);

$fecha_cobro_validada   = false;

$var_sesion_modulo = $modulo.'_cheque_info'.$var_sesion_random;

$arr['error'] = false;

$txt_importe_cheque = Gral::getImporteDesdePriceFormatToDB($txt_importe_cheque);

if($cheque_id == 0)
{
    if ($key == -1) {
        $arr['error_general'] = Lang::_lang('Ups! ocurrio un error', true);
        $arr['error'] = true;
    }
    
    if ($cmb_gral_banco_id == 0) {
        $arr['cmb_gral_banco_id'] = Lang::_lang('Debe seleccionar un banco', true);
        $arr['error'] = true;
    }
    else
    {
        $gral_banco = GralBanco::getOxId($cmb_gral_banco_id);
        if($gral_banco)
        {
            $gral_banco_descripcion = $gral_banco->getDescripcionCorta();
        }
    }
    /*if (Ctrl::esVacio($txt_codigo_sucursal)) {
        $arr['txt_codigo_sucursal'] = Lang::_lang('Debe ingresar un codigo sucursal', true);
        $arr['error'] = true;
    }*/
    
    /*if (Ctrl::esVacio($txt_descripcion)) {
        $arr['txt_descripcion'] = Lang::_lang('Debe ingresar una descripcion', true);
        $arr['error'] = true;
    }*/
    
    if (Ctrl::esVacio($txt_entregador)) {
        $arr['txt_entregador'] = Lang::_lang('Debe ingresar datos de un entregador', true);
        $arr['error'] = true;
    }
    
    if (Ctrl::esVacio($txt_firmante)) {
        $arr['txt_firmante'] = Lang::_lang('Debe ingresar datos de un firmante', true);
        $arr['error'] = true;
    }
    
    if (Ctrl::esVacio($txt_numero_cheque)) {
        $arr['txt_numero_cheque'] = Lang::_lang('Debe ingresar un numero de cheque valido', true);
        $arr['error'] = true;
    }
    else
    {
        if(!Ctrl::esDigito($txt_numero_cheque))
        {
            $arr['txt_numero_cheque'] = Lang::_lang('Debe ingresar un numero de cheque valido', true);
            $arr['error'] = true; 
        }
    }
    
    if (Ctrl::esVacio($txt_importe_cheque)) {
        $arr['txt_importe_cheque'] = Lang::_lang('Debe ingresar un importe de cheque valido', true);
        $arr['error'] = true;
    }
    else
    {
        if(!Ctrl::esNumero($txt_importe_cheque))
        {
            $arr['txt_importe_cheque'] = Lang::_lang('Debe ingresar un importe de cheque valido', true);
            $arr['error'] = true; 
        }
    }

    if (Ctrl::esVacio($txt_fecha_emision)) {
        $arr['txt_fecha_emision'] = Lang::_lang('Debe ingresar una fecha', true);
        $arr['error'] = true;
    }
    else
    {
        $txt_fecha_emision_db = Gral::getFechaToDB($txt_fecha_emision);
        if (!Ctrl::esFechaValida($txt_fecha_emision_db)) {
            $arr['txt_fecha_emision'] = Lang::_lang('Debe ingresar una fecha valida', true);
            $arr['error'] = true;
        }
        else
        {
            $fecha_emision_validada = true;
    }
    }
    
    if (Ctrl::esVacio($txt_fecha_cobro)) {
        $arr['txt_fecha_cobro'] = Lang::_lang('Debe ingresar una fecha', true);
        $arr['error'] = true;
    }
    else
    {
        $txt_fecha_cobro_db = Gral::getFechaToDB($txt_fecha_cobro);
        if (!Ctrl::esFechaValida($txt_fecha_cobro_db)) {
            $arr['txt_fecha_cobro'] = Lang::_lang('Debe ingresar una fecha valida', true);
            $arr['error'] = true;
        }
        else
        {
            if(!Date::esRangoValido($txt_fecha_emision_db, $txt_fecha_cobro_db))
            {
                $arr['txt_fecha_emision'] = Lang::_lang('La fecha de emision no puede ser mayor a la fecha de cobro', true);
                $arr['error'] = true;
            }
            else
            {
                $fecha_cobro_validada = true;
            }
        }
    }
    
    if ($cmb_fnd_chq_tipo_emisor_id == 0){
        $arr['cmb_fnd_chq_tipo_emisor_id'] = Lang::_lang('Debe seleccionar un tipo emisor', true);
        $arr['error'] = true;
    }
    else
    {
        $fnd_chq_tipo_emisor = FndChqTipoEmisor::getOxId($cmb_fnd_chq_tipo_emisor_id);
        if($fnd_chq_tipo_emisor)
        {
            if($fnd_chq_tipo_emisor->getCodigo() == FndChqTipoEmisor::TIPO_PROPIO)
            {
                if ($cmb_fnd_chq_chequera_id == null)
                {
                    $arr['cmb_fnd_chq_chequera_id'] = Lang::_lang('Debe seleccionar una Chequera', true);
                    $arr['error'] = true;
                }
            }
        }
    }
    
    if ($cmb_fnd_chq_tipo_emision_id == 0){
        $arr['cmb_fnd_chq_tipo_emision_id'] = Lang::_lang('Debe seleccionar un tipo emision', true);
        $arr['error'] = true;
    }
    
    if ($cmb_fnd_chq_tipo_pago_id == 0){
        $arr['cmb_fnd_chq_tipo_pago_id'] = Lang::_lang('Debe seleccionar un tipo pago', true);
        $arr['error'] = true;
    }
    else
    {
        $txt_fecha_emision_db   = Gral::getFechaToDB($txt_fecha_emision);
        $txt_fecha_cobro_db     = Gral::getFechaToDB($txt_fecha_cobro);
        $datetime_fecha_emision = date_create($txt_fecha_emision_db);
        $datetime_fecha_cobro   = date_create($txt_fecha_cobro_db);
    
        if($fecha_emision_validada && $fecha_cobro_validada)
        {
            if($datetime_fecha_emision == $datetime_fecha_cobro)
            {
                $fnd_chq_tipo_pago = FndChqTipoPago::getOxId($cmb_fnd_chq_tipo_pago_id);
                if($fnd_chq_tipo_pago)
                {
                    if($fnd_chq_tipo_pago->getCodigo() != FndChqTipoPago::TIPO_COMUN)
                    {
                        $arr['cmb_fnd_chq_tipo_pago_id'] = Lang::_lang('Debe seleccionar tipo pago "COMUN"', true);
                        $arr['error'] = true;
                    }
                }
            }
            else
            {
                $fnd_chq_tipo_pago = FndChqTipoPago::getOxId($cmb_fnd_chq_tipo_pago_id);
                if($fnd_chq_tipo_pago)
                {
                    if($fnd_chq_tipo_pago->getCodigo() != FndChqTipoPago::TIPO_PAGO_DIFERIDO)
                    {
                        $arr['cmb_fnd_chq_tipo_pago_id'] = Lang::_lang('Debe seleccionar tipo pago "PAGO DIFERIDO"', true);
                        $arr['error'] = true;
                    }
                }
            }
        }
    }
    
    if ($cmb_fnd_chq_cruzado == -1){
        $arr['cmb_fnd_chq_cruzado'] = Lang::_lang('Debe seleccionar cruzado o no', true);
        $arr['error'] = true;
    }
    
    //Si existe otro cheque con el mismo numero y banco
    if (!Ctrl::esVacio($txt_numero_cheque) && $cmb_gral_banco_id != 0)
    {
        $arr_criterio = array(
            array('campo' => 'numero'       , 'valor' => $txt_numero_cheque),
            array('campo' => 'gral_banco_id', 'valor' => $cmb_gral_banco_id)
        );
        $fnd_chq_cheque_criterio = FndChqCheque::getOxArray($arr_criterio);
        
        if($fnd_chq_cheque_criterio)
        {
            $arr['txt_numero_cheque'] = Lang::_lang('Existe un cheque con el mismo numero', true);
            $arr['cmb_gral_banco_id'] = Lang::_lang('Existe un cheque con el mismo banco', true);
            $arr['error'] = true;
        }
    }
    
    $descripcion = 'Nro '.$txt_numero_cheque.' - '.$txt_fecha_cobro.' - '.$gral_banco_descripcion;
}
elseif($cheque_id != 0)
{
    $fnd_chq_cheque = FndChqCheque::getOxId($cheque_id);
    if($fnd_chq_cheque)
    {
        $cmb_fnd_chq_chequera_id          = $fnd_chq_cheque->getFndChqChequeraId();
        $cmb_gral_banco_id                = $fnd_chq_cheque->getGralBancoId();
        $txt_codigo_sucursal              = $fnd_chq_cheque->getCodigoSucursal();
        $txt_descripcion                  = $fnd_chq_cheque->getDescripcion();
        $txt_firmante                     = $fnd_chq_cheque->getFirmante();
        $txt_entregador                   = $fnd_chq_cheque->getEntregador();
        $txt_numero_cheque                = $fnd_chq_cheque->getNumero();
        $txt_importe_cheque               = $fnd_chq_cheque->getImporte();
        $txt_fecha_emision                = $fnd_chq_cheque->getFechaEmision();
        $txt_fecha_cobro                  = $fnd_chq_cheque->getFechaCobro();
        $cmb_fnd_chq_tipo_emisor_id       = $fnd_chq_cheque->getFndChqTipoEmisorId();
        $cmb_fnd_chq_tipo_emision_id      = $fnd_chq_cheque->getFndChqTipoEmisionId();
        $cmb_fnd_chq_tipo_pago_id         = $fnd_chq_cheque->getFndChqTipoPagoId();
        $cmb_fnd_chq_cruzado              = $fnd_chq_cheque->getCruzado();
        $txa_observacion                  = $fnd_chq_cheque->getObservacion();
        
        $descripcion = 'Nro '.$txt_numero_cheque.' - '.Gral::getFechaToWeb($txt_fecha_cobro).' - '.$fnd_chq_cheque->getGralBanco()->getDescripcionCorta();
    }
}

if (!$arr['error'])
{
    $arrays = Gral::getSes($var_sesion_modulo);
    
    $arr['cheque_id']                 = $cheque_id;
    $arr['fnd_chq_chequera_id']       = $cmb_fnd_chq_chequera_id;
    $arr['gral_banco_id']             = $cmb_gral_banco_id;
    $arr['codigo_sucursal']           = $txt_codigo_sucursal;
    $arr['descripcion']               = $descripcion; //$txt_descripcion;
    $arr['entregador']                = $txt_entregador;
    $arr['firmante']                  = $txt_firmante;
    $arr['numero_cheque']             = $txt_numero_cheque;
    $arr['importe_cheque']            = $txt_importe_cheque;
    $arr['importe_cheque_formateado'] = Gral::getImporteDesdeDbToPriceFormat($txt_importe_cheque);
    $arr['fecha_cobro']               = $txt_fecha_cobro;
    $arr['fecha_emision']             = $txt_fecha_emision;
    $arr['fnd_chq_tipo_emisor_id']    = $cmb_fnd_chq_tipo_emisor_id;
    $arr['fnd_chq_tipo_emision_id']   = $cmb_fnd_chq_tipo_emision_id;
    $arr['fnd_chq_tipo_pago_id']      = $cmb_fnd_chq_tipo_pago_id;
    $arr['fnd_chq_cruzado']           = $cmb_fnd_chq_cruzado;
    $arr['fnd_chq_observacion']       = $txa_observacion;
    
    $arrays[$key] = $arr;
    
    Gral::setSes($var_sesion_modulo, $arrays);

    //Gral::pr($var_sesion_modulo, 'var_sesion_modulo');
    //Gral::prr(Gral::getSes($var_sesion_modulo));
}

$arr_json = json_encode($arr);
echo $arr_json;

?>