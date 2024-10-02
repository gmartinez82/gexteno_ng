<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_VEH_COCHE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_presupuesto_veh_coche = VtaPresupuestoVehCoche::getOxId($id);
    if($vta_presupuesto_veh_coche->getEstado() == 1){
        $vta_presupuesto_veh_coche->setEstado(0);
    }else{
        $vta_presupuesto_veh_coche->setEstado(1);
    }
    $vta_presupuesto_veh_coche->cambiarEstado();
}        
?>

