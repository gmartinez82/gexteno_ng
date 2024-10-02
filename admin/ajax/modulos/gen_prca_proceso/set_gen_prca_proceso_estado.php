<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_PRCA_PROCESO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gen_prca_proceso = GenPrcaProceso::getOxId($id);
    if($gen_prca_proceso->getEstado() == 1){
        $gen_prca_proceso->setEstado(0);
    }else{
        $gen_prca_proceso->setEstado(1);
    }
    $gen_prca_proceso->cambiarEstado();
}        
?>

