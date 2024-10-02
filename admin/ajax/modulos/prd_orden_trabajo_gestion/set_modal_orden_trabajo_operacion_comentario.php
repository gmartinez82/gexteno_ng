<?php

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

// el ID se recibe por GET
// ------------------------------------------------------------------
$prd_orden_trabajo_operacion_id = Gral::getVars(Gral::VARS_GET, 'prd_orden_trabajo_operacion_id', 0, Gral::TIPO_INTEGER);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$comentario = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '', Gral::TIPO_STRING);

//Gral::pr($prd_orden_trabajo_operacion_id, 'prd_orden_trabajo_operacion_id');
//Gral::pr($comentario, 'comentario');

$arr["error"] = false;

if ( $comentario == '' )
{
    $arr['txa_observacion'] = Lang::_lang('Debe ingresar un comentario', true);
    $arr['error'] = true;
}

if ( ! $arr['error'] )
{
    $prd_orden_trabajo_operacion = PrdOrdenTrabajoOperacion::getOxId($prd_orden_trabajo_operacion_id);
    if ( $prd_orden_trabajo_operacion )
    {
        $prd_prd_orden_trabajo_operacion_estado = $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionEstadoActual();
        if ( $prd_prd_orden_trabajo_operacion_estado )
        {
            $prd_prd_orden_trabajo_operacion_estado->setObservacion($comentario);
            $prd_prd_orden_trabajo_operacion_estado->save();
        }
    }
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
