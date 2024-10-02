<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $prd_orden_trabajo_operacion_tipo_estado = PrdOrdenTrabajoOperacionTipoEstado::getOxId($id);
    if($prd_orden_trabajo_operacion_tipo_estado){
        if($prd_orden_trabajo_operacion_tipo_estado->getHash() == $hash){
            $prd_orden_trabajo_operacion_tipo_estado->deleteAll();
        }
    }
}    
?>

