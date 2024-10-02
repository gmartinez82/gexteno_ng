<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_CUENTA_PLAN_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cntb_cuenta_plan = CntbCuentaPlan::getOxId($id);
    if($cntb_cuenta_plan->getEstado() == 1){
        $cntb_cuenta_plan->setEstado(0);
    }else{
        $cntb_cuenta_plan->setEstado(1);
    }
    $cntb_cuenta_plan->cambiarEstado();
}        
?>

