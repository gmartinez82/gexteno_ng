<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_CUENTA_PLAN_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cntb_cuenta_plan = new CntbCuentaPlan();
    $cntb_cuenta_plan->setId($id, false);
    $cntb_cuenta_plan->deleteAll();
}    
?>

