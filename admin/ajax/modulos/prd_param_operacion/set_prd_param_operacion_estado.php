<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prd_param_operacion = PrdParamOperacion::getOxId($id);
    if($prd_param_operacion->getEstado() == 1){
        $prd_param_operacion->setEstado(0);
    }else{
        $prd_param_operacion->setEstado(1);
    }
    $prd_param_operacion->cambiarEstado();
}        
?>

