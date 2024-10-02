<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prd_orden_trabajo_operacion_tipo_estado = PrdOrdenTrabajoOperacionTipoEstado::getOxId($id);
    if($prd_orden_trabajo_operacion_tipo_estado->getEstado() == 1){
        $prd_orden_trabajo_operacion_tipo_estado->setEstado(0);
    }else{
        $prd_orden_trabajo_operacion_tipo_estado->setEstado(1);
    }
    $prd_orden_trabajo_operacion_tipo_estado->cambiarEstado();
}        
?>

