<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OS_PRIORIDAD_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $os_prioridad = OsPrioridad::getOxId($id);
    if($os_prioridad->getEstado() == 1){
        $os_prioridad->setEstado(0);
    }else{
        $os_prioridad->setEstado(1);
    }
    $os_prioridad->cambiarEstado();
}        
?>

