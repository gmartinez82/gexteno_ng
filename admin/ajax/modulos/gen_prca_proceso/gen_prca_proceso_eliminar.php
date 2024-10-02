<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_PRCA_PROCESO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gen_prca_proceso = new GenPrcaProceso();
    $gen_prca_proceso->setId($id, false);
    $gen_prca_proceso->deleteAll();
}    
?>

