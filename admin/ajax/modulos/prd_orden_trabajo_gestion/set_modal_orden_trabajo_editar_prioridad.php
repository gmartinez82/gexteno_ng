<?php

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$prd_orden_trabajo_id = Gral::getVars(Gral::VARS_GET, 'prd_orden_trabajo_id', 0, Gral::TIPO_INTEGER);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$cmb_prd_prioridad_id = Gral::getVars(Gral::VARS_POST, 'cmb_prd_prioridad_id', 0, Gral::TIPO_INTEGER);
$txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '', Gral::TIPO_STRING);

/*
Gral::pr($cmb_prd_prioridad_id, 'cmb_prd_prioridad_id');
exit;*/

$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($prd_orden_trabajo_id);

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if ( $cmb_prd_prioridad_id == 0 )
{
    $arr['cmb_prd_prioridad_id'] = Lang::_lang('Debe seleccionar una prioridad', true);
    $arr['error'] = true;
}

if ( ! $arr['error'] )
{
    $prd_orden_trabajo->setPrdPrioridadId($cmb_prd_prioridad_id);
    $prd_orden_trabajo->save();
    
    $prd_orden_trabajo_estado_actual = $prd_orden_trabajo->getPrdOrdenTrabajoEstadoActual();
    $observacion = $prd_orden_trabajo_estado_actual->getObservacion() . ' - ' . $txa_observacion;
    $prd_orden_trabajo->setPrdOrdenTrabajoEstado($prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getCodigo(), $observacion);

}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
