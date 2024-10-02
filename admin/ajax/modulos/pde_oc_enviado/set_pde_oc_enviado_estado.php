<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_OC_ENVIADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_oc_enviado = PdeOcEnviado::getOxId($id);
    if($pde_oc_enviado->getEstado() == 1){
        $pde_oc_enviado->setEstado(0);
    }else{
        $pde_oc_enviado->setEstado(1);
    }
    $pde_oc_enviado->cambiarEstado();
}        
?>

