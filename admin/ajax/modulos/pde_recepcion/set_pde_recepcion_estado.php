<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_recepcion = PdeRecepcion::getOxId($id);
    if($pde_recepcion->getEstado() == 1){
        $pde_recepcion->setEstado(0);
    }else{
        $pde_recepcion->setEstado(1);
    }
    $pde_recepcion->cambiarEstado();
}        
?>

