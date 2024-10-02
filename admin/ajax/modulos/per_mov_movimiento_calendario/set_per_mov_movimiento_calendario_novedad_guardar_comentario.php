<?php

include "_autoload.php";
date_default_timezone_set('America/Argentina/Buenos_Aires');

$hdn_per_mov_planificacion_id = Gral::getVars(1, "hdn_per_mov_planificacion_id", 0);
$txa_observacion              = Gral::getVars(1, "txa_observacion", '');
//Gral::prr($_POST);
//exit;

// se realizan los controles de datos
$arr["error"] = false;


if(!$arr["error"])
{
    $per_mov_planificacion = PerMovPlanificacion::getOxId($hdn_per_mov_planificacion_id);
    $per_mov_planificacion->setObservacion($txa_observacion);
    $per_mov_planificacion->save();
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;

?>