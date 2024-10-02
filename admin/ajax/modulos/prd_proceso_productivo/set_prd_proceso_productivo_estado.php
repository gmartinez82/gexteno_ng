<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_PROCESO_PRODUCTIVO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prd_proceso_productivo = PrdProcesoProductivo::getOxId($id);
    if($prd_proceso_productivo->getEstado() == 1){
        $prd_proceso_productivo->setEstado(0);
    }else{
        $prd_proceso_productivo->setEstado(1);
    }
    $prd_proceso_productivo->cambiarEstado();
}        
?>

