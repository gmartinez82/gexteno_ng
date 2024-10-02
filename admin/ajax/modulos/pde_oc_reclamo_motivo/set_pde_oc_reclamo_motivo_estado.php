<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_MOTIVO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_oc_reclamo_motivo = PdeOcReclamoMotivo::getOxId($id);
    if($pde_oc_reclamo_motivo->getEstado() == 1){
        $pde_oc_reclamo_motivo->setEstado(0);
    }else{
        $pde_oc_reclamo_motivo->setEstado(1);
    }
    $pde_oc_reclamo_motivo->cambiarEstado();
}        
?>

