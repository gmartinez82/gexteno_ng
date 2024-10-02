<?php 
require_once "base/BFndCajaMovimiento.php"; 
class FndCajaMovimiento extends BFndCajaMovimiento
{
    /**
     * Inicializa FndCajaMovimiento con sus FndCajaMovimientoItem.
     * @creado_por Esteban Martinez
     * @creado 15/07/2019
     */
    static function setInicializarFndCajaMovimiento($fnd_caja_movimiento_id, $fnd_caja_origen, $fnd_caja_destino, $fnd_caja_movimiento_tipo_id, $observacion, $var_sesion_random, $descripcions, $referencias, $importe_unitarios, $gral_fp_forma_pago_ids)
    {
        if ($fnd_caja_movimiento_id == 0)
        {
            $fnd_caja_movimiento = new FndCajaMovimiento();
            $fnd_caja_movimiento->setFndCajaOrigen($fnd_caja_origen);
            $fnd_caja_movimiento->setFndCajaDestino($fnd_caja_destino);
            $fnd_caja_movimiento->setFndCajaTipoMovimientoId($fnd_caja_movimiento_tipo_id);
            $fnd_caja_movimiento->setAutorizado(0);
            $fnd_caja_movimiento->setAutorizadoEl('1900-01-01 00:00:00');
            $fnd_caja_movimiento->setEstado(1);
            $fnd_caja_movimiento->setObservacion($observacion);
            $fnd_caja_movimiento->save();
            
            foreach ($descripcions as $key => $descripcion)
            {
                $importe_unitario = $importe_unitarios[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);
                
                $fnd_caja_movimiento_item = new FndCajaMovimientoItem();
                
                $fnd_caja_movimiento_item->setDescripcion($descripcions[$key]);
                $fnd_caja_movimiento_item->setFndCajaMovimientoId($fnd_caja_movimiento->getId());
                $fnd_caja_movimiento_item->setImporte($importe_unitario);
                $fnd_caja_movimiento_item->setGralFpFormaPagoId($gral_fp_forma_pago_ids[$key]);
                $fnd_caja_movimiento_item->setCodigo($referencias[$key]);
                $fnd_caja_movimiento_item->setObservacion('');
                $fnd_caja_movimiento_item->setEstado(1);
                $fnd_caja_movimiento_item->save();
                
                // -------------------------------------------------------------
                // Se registra el detalle del cheque si existe
                // -------------------------------------------------------------
                //$arr_fnd_caja_movimiento_cheque_infos = Gral::getSes("fnd_caja_movimiento_cheque_info");
                $arr_fnd_caja_movimiento_cheque_infos = Gral::getSes("fnd_caja_movimiento_cheque_info".$var_sesion_random);
                
                if (!is_null($arr_fnd_caja_movimiento_cheque_infos[$key]))
                {
                    $arr       = $arr_fnd_caja_movimiento_cheque_infos[$key];
                    $cheque_id = $arr['cheque_id'];
                    // -------------------------------------------------------------
                    // inicializa cheque
                    // -------------------------------------------------------------
                    $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdeFndCajaMovimiento($cheque_id, $fnd_caja_movimiento_item, $arr);
                }
            }
            
            $fnd_caja_movimiento_estado = $fnd_caja_movimiento->setFndCajaMovimientoEstado(FndCajaMovimientoTipoEstado::TIPO_GENERADO, $observacion = 'Movimiento de caja registrado por movimiento #' . $fnd_caja_movimiento->getId());
        }
        elseif ($fnd_caja_movimiento_id != 0)
        {
        
        }
    }
    

    /**
     * @creado_por Esteban Martinez
     * @creado 17/07/2019
     */
    public function setFndCajaMovimientoEstado($codigo, $observacion = '')
    {
        $inicial = 1;
        $fnd_chq_estado = false;
        
        // se agrega el nuevo estado del factura
        $fnd_caja_movimiento_tipo_estado = FndCajaMovimientoTipoEstado::getOxCodigo($codigo);
        
        if ($fnd_caja_movimiento_tipo_estado)
        {
            foreach ($this->getFndCajaMovimientoEstados() as $fnd_caja_movimiento_estado)
            {
                $fnd_caja_movimiento_estado->setActual(0);
                $fnd_caja_movimiento_estado->save();
                $inicial = 0;
            }
            
            $fnd_caja_movimiento_estado = new FndCajaMovimientoEstado();
            $fnd_caja_movimiento_estado->setFndCajaMovimientoId($this->getId());
            $fnd_caja_movimiento_estado->setFndCajaMovimientoTipoEstadoId($fnd_caja_movimiento_tipo_estado->getId());
            $fnd_caja_movimiento_estado->setInicial($inicial);
            $fnd_caja_movimiento_estado->setActual(1);
            $fnd_caja_movimiento_estado->setObservacion($observacion);
            $fnd_caja_movimiento_estado->save();
            
            // actualizamos el estado en pde_recibo      
            $this->setFndCajaMovimientoTipoEstadoId($fnd_caja_movimiento_tipo_estado->getId());
            $this->save();
        }
        
        return $fnd_caja_movimiento_estado;
    }
    
}
?>