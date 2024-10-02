<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_PROCESO_PRODUCTIVO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $prd_proceso_productivo = PrdProcesoProductivo::getOxId($id);
    if($prd_proceso_productivo){
        if($prd_proceso_productivo->getHash() == $hash){
            $prd_proceso_productivo->deleteAll();
        }
    }
}    
?>

