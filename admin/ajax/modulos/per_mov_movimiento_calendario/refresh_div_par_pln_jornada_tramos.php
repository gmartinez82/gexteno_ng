<?php
include "_autoload.php";
//Este archivo es llamado por el js
$arr = array();

$per_mov_planificacion_id  = Gral::getVars(1, "per_mov_planificacion_id", 0);
$pln_jornada_id            = Gral::getVars(1, "pln_jornada_id", 0);

$per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
if($per_mov_planificacion)//Si hay una planificacion es entonces es Editar novedad
{
    $pln_jornada_planificacion_id  = $per_mov_planificacion->getPlnJornadaId();
    
    $per_mov_planificacion_tramos = $per_mov_planificacion->getPerMovPlanificacionTramos(null, null, null, array(array("campo" => "orden", "orden" => "asc")));    
    if(count($per_mov_planificacion_tramos) > 0 && $pln_jornada_id == $pln_jornada_planificacion_id){
        include "div_par_per_mov_movimiento_tramos.php";    
    }
    else
    {
        $pln_jornada = PlnJornada::getOxId($pln_jornada_id);
        if($pln_jornada)
        {
            $pln_jornada_tramos = $pln_jornada->getPlnJornadaTramos(null, null, null, array(array("campo" => "orden", "orden" => "asc")));
            //Se incluye el html
            include "div_par_pln_jornada_tramos.php";
        }
    }
}
else//Si no hay planificacion es nueva novedad o novedad parcial
{
    $pln_jornada = PlnJornada::getOxId($pln_jornada_id);
    if($pln_jornada)
    {
        $pln_jornada_tramos = $pln_jornada->getPlnJornadaTramos(null, null, null, array(array("campo" => "orden", "orden" => "asc")));
        //Se incluye el html
        include "div_par_pln_jornada_tramos.php";
    }
}

?>