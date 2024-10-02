<?php
include "_autoload.php";

$fecha      = Gral::getVars(2, 'fecha', '');
$persona_id = Gral::getVars(2, 'persona_id', 0);

$per_persona = PerPersona::getOxId($persona_id);

if($per_persona)
{
    $arr_parametros = array("persona_id" => $persona_id, "fecha" => $fecha);
    PrcProcesoResumen::execProcesoPerMovimientos($arr_parametros);

    $per_id        = $per_persona->getId();
    $gral_empresa  = $per_persona->getGralEmpresa();
    
    if($gral_empresa){
        $gral_empresa_id = $gral_empresa->getId();
    }
    
}

include "per_mov_movimiento_calendario_uno_fecha.php";