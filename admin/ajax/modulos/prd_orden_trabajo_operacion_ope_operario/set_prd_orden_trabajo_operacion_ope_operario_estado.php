<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prd_orden_trabajo_operacion_ope_operario = PrdOrdenTrabajoOperacionOpeOperario::getOxId($id);
    if($prd_orden_trabajo_operacion_ope_operario->getEstado() == 1){
        $prd_orden_trabajo_operacion_ope_operario->setEstado(0);
    }else{
        $prd_orden_trabajo_operacion_ope_operario->setEstado(1);
    }
    $prd_orden_trabajo_operacion_ope_operario->cambiarEstado();
}        
?>

