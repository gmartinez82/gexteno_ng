<?php

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

$prd_orden_trabajo_operacion_id = Gral::getVars(Gral::VARS_POST, 'prd_orden_trabajo_operacion_id', 0, Gral::TIPO_INTEGER);
$prd_orden_trabajo_operacion_tipo_estado_codigo = Gral::getVars(Gral::VARS_POST, 'prd_orden_trabajo_operacion_tipo_estado_codigo', '', Gral::TIPO_STRING);

$prd_orden_trabajo_operacion = PrdOrdenTrabajoOperacion::getOxId($prd_orden_trabajo_operacion_id);
if ( $prd_orden_trabajo_operacion )
{
    $prd_orden_trabajo_operacion->setPrdOrdenTrabajoOperacionEstado($prd_orden_trabajo_operacion_tipo_estado_codigo, $observacion = date('d/m/Y H:i:s'));
    
    //-------------------------------------------------------------------------
    //-------------------------------------------------------------------------
    $prd_orden_trabajo_ciclo = $prd_orden_trabajo_operacion->getPrdOrdenTrabajoCiclo();
    if ( $prd_orden_trabajo_ciclo )
    {
        $prd_orden_trabajo = $prd_orden_trabajo_ciclo->getPrdOrdenTrabajo();
        
        if ( $prd_orden_trabajo )
        {
            //-------------------------------------------------------------------------
            // Si la operacion se encuentra EN_CURSO
            //-------------------------------------------------------------------------
            if ( $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstado()->getCodigo() == PrdOrdenTrabajoOperacionTipoEstado::TIPO_EN_CURSO )
            {
                //-------------------------------------------------------------------------
                // Si la OT esta CONFIGURADA, FINALIZADA O ANULADA
                //-------------------------------------------------------------------------
                if ( $prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getCodigo() == PrdOrdenTrabajoTipoEstado::TIPO_CONFIGURADA || $prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getCodigo() == PrdOrdenTrabajoTipoEstado::TIPO_FINALIZADA || $prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getCodigo() == PrdOrdenTrabajoTipoEstado::TIPO_ANULADO )
                {
                    //-------------------------------------------------------------------------
                    // Poner la OT EN CURSO
                    //-------------------------------------------------------------------------
                    $prd_orden_trabajo->setPrdOrdenTrabajoEstado(PrdOrdenTrabajoTipoEstado::TIPO_EN_CURSO, $observacion = date('d/m/Y H:i:s'));
                }
            }
            
            //-------------------------------------------------------------------------
            // Si la operacion se encuentra NO_INICIADA
            //-------------------------------------------------------------------------
            if ( $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstado()->getCodigo() == PrdOrdenTrabajoOperacionTipoEstado::TIPO_NO_INICIADA )
            {
                //-------------------------------------------------------------------------
                // Si es OT no inciada
                //-------------------------------------------------------------------------
                if ( $prd_orden_trabajo->getEsOtNoIniciado() )
                {
                    //-------------------------------------------------------------------------
                    // Poner la OT en CONFIGURADA
                    //-------------------------------------------------------------------------
                    $observacion = 'Orden de trabajo en curso ' . date('d/m/Y H:i:s');
                    $prd_orden_trabajo->setPrdOrdenTrabajoEstado(PrdOrdenTrabajoTipoEstado::TIPO_CONFIGURADA, $observacion);
                }
            }
            
            //-------------------------------------------------------------------------
            // Si es OT finalizado
            //-------------------------------------------------------------------------
            if ( $prd_orden_trabajo->getEsOtFinalizado() )
            {
                //-------------------------------------------------------------------------
                // Poner la OT en FINALIZADO
                //-------------------------------------------------------------------------
                $observacion = 'Orden de trabajo finalizada ' . date('d/m/Y H:i:s');
                $prd_orden_trabajo->setPrdOrdenTrabajoEstado(PrdOrdenTrabajoTipoEstado::TIPO_FINALIZADA, $observacion);
            }
        }
    }
}