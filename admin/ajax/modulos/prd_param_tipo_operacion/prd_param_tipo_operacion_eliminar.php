<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_PARAM_TIPO_OPERACION_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $prd_param_tipo_operacion = PrdParamTipoOperacion::getOxId($id);
    if($prd_param_tipo_operacion){
        if($prd_param_tipo_operacion->getHash() == $hash){
            $prd_param_tipo_operacion->deleteAll();
        }
    }
}    
?>

