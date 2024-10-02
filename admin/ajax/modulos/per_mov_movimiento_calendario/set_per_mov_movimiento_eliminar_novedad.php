<?php

include "_autoload.php";
date_default_timezone_set('America/Argentina/Buenos_Aires');


$per_mov_planificacion_id = Gral::getVars(1, "per_mov_planificacion_id", 0);
$tipo_eliminacion         = Gral::getVars(1, "tipo_eliminacion", 0);
$per_persona_id           = Gral::getVars(1, "per_persona_id", 0);
$fecha                    = Gral::getVars(1, "fecha", '');


if($tipo_eliminacion == "eliminacion_parcial")
{
    $per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
    //Gral::prr($per_mov_planificacion);
    if($per_mov_planificacion)
    {
        $per_mov_planificacion->setActual(0);
        $per_mov_planificacion->setEstado(0);
        $per_mov_planificacion->save();
        
        $per_mov_planificacion_tramos = $per_mov_planificacion->getPerMovPlanificacionTramos();
        foreach($per_mov_planificacion_tramos as $per_mov_planificacion_tramo){
            $per_mov_planificacion_tramo->setEstado(0);
            $per_mov_planificacion_tramo->save();
        }
    }
}
elseif($tipo_eliminacion == "eliminacion_total")
{
    $criterio = new Criterio();
    $criterio->addTabla(PerMovPlanificacion::GEN_TABLA);
    $criterio->add(PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, $per_persona_id, Criterio::IGUAL);
    $criterio->add(PerMovPlanificacion::GEN_ATTR_FECHA, $fecha, Criterio::IGUAL);
    $criterio->add(PerMovPlanificacion::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
    //$criterio->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
    $criterio->setCriterios();
    $per_mov_planificacions = PerMovPlanificacion::getPerMovPlanificacions(null, $criterio);
    foreach($per_mov_planificacions as $per_mov_planificacion)
    {
        $per_mov_planificacion->setActual(0);
        $per_mov_planificacion->setEstado(0);
        $per_mov_planificacion->save();

        $per_mov_planificacion_tramos = $per_mov_planificacion->getPerMovPlanificacionTramos();
        foreach($per_mov_planificacion_tramos as $per_mov_planificacion_tramo){
            $per_mov_planificacion_tramo->setEstado(0);
            $per_mov_planificacion_tramo->save();
        }
    }
}



?>