<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_URGENCIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_urgencia = PdeUrgencia::getOxId($id);
    if($pde_urgencia->getEstado() == 1){
        $pde_urgencia->setEstado(0);
    }else{
        $pde_urgencia->setEstado(1);
    }
    $pde_urgencia->cambiarEstado();
}        
?>

