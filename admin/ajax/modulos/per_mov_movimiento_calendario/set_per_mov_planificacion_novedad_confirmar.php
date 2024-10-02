<?php

include "_autoload.php";
date_default_timezone_set('America/Argentina/Buenos_Aires');


$per_mov_planificacion_id = Gral::getVars(1, "per_mov_planificacion_id", 0);
$tipo_eliminacion         = Gral::getVars(1, "tipo_eliminacion", 0);
$per_persona_id           = Gral::getVars(1, "per_persona_id", 0);
$fecha                    = Gral::getVars(1, "fecha", '');

$per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
if($per_mov_planificacion)
{
   $per_mov_planificacion->setConfirmado(1);
   $per_mov_planificacion->save();
}



?>