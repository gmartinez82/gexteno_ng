<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_ENVIO_EMAIL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_oc_reclamo_envio_email = PdeOcReclamoEnvioEmail::getOxId($id);
    if($pde_oc_reclamo_envio_email->getEstado() == 1){
        $pde_oc_reclamo_envio_email->setEstado(0);
    }else{
        $pde_oc_reclamo_envio_email->setEstado(1);
    }
    $pde_oc_reclamo_envio_email->cambiarEstado();
}        
?>

