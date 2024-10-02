<?php
include_once '_autoload.php';

$prd_orden_trabajo_operacion_id = Gral::getVars(Gral::VARS_POST, 'prd_orden_trabajo_operacion_id', 0, Gral::TIPO_INTEGER);

$prd_orden_trabajo_operacion = PrdOrdenTrabajoOperacion::getOxId($prd_orden_trabajo_operacion_id);


if ( $prd_orden_trabajo_operacion )
{
    $operacion_numero = $prd_orden_trabajo_operacion->getNumero();
    
    $prd_param_operacion = $prd_orden_trabajo_operacion->getPrdParamOperacion();
    if ( $prd_param_operacion )
    {
        $operacion = $prd_param_operacion->getDescripcion();
        
    }
    
    $prd_orden_trabajo_operacion_prd_equipos = $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionPrdEquipos(null, null, true);
    $prd_orden_trabajo_operacion_ope_operarios = $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionOpeOperarios(null, null, true);
    
    include 'prd_orden_trabajo_edicion_bloque_operacion.php';
}
?>