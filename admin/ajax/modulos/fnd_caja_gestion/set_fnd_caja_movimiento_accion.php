<?php
include '_autoload.php';

$fnd_caja_movimiento_id     = Gral::getVars(Gral::VARS_POST, 'fnd_caja_movimiento_id', 0);
$txa_observacion            = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');
$fnd_caja_movimiento_accion = Gral::getVars(Gral::VARS_POST, 'fnd_caja_movimiento_accion', '');

$arr['error'] = false;

$user = UsUsuario::autenticado();
$fnd_caja_movimiento = FndCajaMovimiento::getOxId($fnd_caja_movimiento_id);

if (Ctrl::esVacio($txa_observacion))
{
    $arr['error']           = true;
    $arr['txa_observacion'] = Lang::_lang('Debe ingresar una observacion', true);
}


if (!$arr['error'])
{
    switch ($fnd_caja_movimiento_accion)
    {
        case FndCajaMovimientoTipoEstado::TIPO_APROBADO:
            $txa_observacion = 'Movimiento aceptado por caja #'.$fnd_caja_movimiento->getFndCajaDestinoObj()->getDescripcion().' - '.$txa_observacion;
            $fnd_caja_movimiento_estado = $fnd_caja_movimiento->setFndCajaMovimientoEstado(FndCajaMovimientoTipoEstado::TIPO_APROBADO, $txa_observacion);
            
            $fnd_caja_movimiento->setAutorizado(1);
            $fnd_caja_movimiento->setAutorizadoEl(Gral::getFechaToDB(date('d/m/Y')));
            $fnd_caja_movimiento->setAutorizadoPor($user->getId());
            $fnd_caja_movimiento->save();
            
            //Recorrer los items y a los items de cheque retrotraer al estado anterior
            $fnd_caja_movimiento_items = $fnd_caja_movimiento->getFndCajaMovimientoItems();
            foreach($fnd_caja_movimiento_items as $fnd_caja_movimiento_item)
            {
                if($fnd_caja_movimiento_item->getGralFpFormaPago()->getCodigo() == GralFpFormaPago::TIPO_CHEQUE)
                {
                    $fnd_chq_cheque = FndChqCheque::getOxNumero($fnd_caja_movimiento_item->getCodigo());
                    if($fnd_chq_cheque)
                    {
                        $fnd_caja_destino = $fnd_caja_movimiento->getFndCajaDestinoObj();

                        $fnd_chq_cheque->setFndCajaId($fnd_caja_movimiento->getFndCajaDestino());
                        $fnd_chq_cheque->setGralCajaId($fnd_caja_destino->getGralCajaId());
                        $fnd_chq_cheque->save();
                        
                        $fnd_chq_cheque->setRetrotraerFndChqChequeTipoEstado($txa_observacion, $fnd_caja_movimiento);
                    }
                }
            }
            break;
        case FndCajaMovimientoTipoEstado::TIPO_ANULADO:
            $txa_observacion = 'Movimiento Anulado por caja #'.$fnd_caja_movimiento->getFndCajaOrigenObj()->getDescripcion().' - '.$txa_observacion;
            $fnd_caja_movimiento_estado = $fnd_caja_movimiento->setFndCajaMovimientoEstado(FndCajaMovimientoTipoEstado::TIPO_ANULADO, $txa_observacion);
            
            //Recorrer los items y a los items de cheque retrotraer al estado anterior
            $fnd_caja_movimiento_items = $fnd_caja_movimiento->getFndCajaMovimientoItems();
            foreach($fnd_caja_movimiento_items as $fnd_caja_movimiento_item)
            {
                if($fnd_caja_movimiento_item->getGralFpFormaPago()->getCodigo() == GralFpFormaPago::TIPO_CHEQUE)
                {
                    $fnd_chq_cheque = FndChqCheque::getOxNumero($fnd_caja_movimiento_item->getCodigo());
                    if($fnd_chq_cheque){
                        $fnd_chq_cheque->setRetrotraerFndChqChequeTipoEstado($txa_observacion);
                    }
                }
            }
            break;
        case FndCajaMovimientoTipoEstado::TIPO_RECHAZADO:
            $txa_observacion = 'Movimiento Rechazado por caja #'.$fnd_caja_movimiento->getFndCajaDestinoObj()->getDescripcion().' - '.$txa_observacion;
            $fnd_caja_movimiento_estado = $fnd_caja_movimiento->setFndCajaMovimientoEstado(FndCajaMovimientoTipoEstado::TIPO_RECHAZADO, $txa_observacion);
            
            //Recorrer los items y a los items de cheque retrotraer al estado anterior
            $fnd_caja_movimiento_items = $fnd_caja_movimiento->getFndCajaMovimientoItems();
            foreach($fnd_caja_movimiento_items as $fnd_caja_movimiento_item)
            {
                if($fnd_caja_movimiento_item->getGralFpFormaPago()->getCodigo() == GralFpFormaPago::TIPO_CHEQUE)
                {
                    $fnd_chq_cheque = FndChqCheque::getOxNumero($fnd_caja_movimiento_item->getCodigo());
                    if($fnd_chq_cheque){
                        $fnd_chq_cheque->setRetrotraerFndChqChequeTipoEstado($txa_observacion);
                    }
                }
            }
            break;
        default:
            false;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>