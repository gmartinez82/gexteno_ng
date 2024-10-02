<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $per_mov_planificacion_tramo = PerMovPlanificacionTramo::getOxId($id);
    $per_mov_planificacion_tramo->duplicarPerMovPlanificacionTramo();
}    

