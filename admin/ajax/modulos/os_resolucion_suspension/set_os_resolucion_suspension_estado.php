<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OS_RESOLUCION_SUSPENSION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $os_resolucion_suspension = OsResolucionSuspension::getOxId($id);
    if($os_resolucion_suspension->getEstado() == 1){
        $os_resolucion_suspension->setEstado(0);
    }else{
        $os_resolucion_suspension->setEstado(1);
    }
    $os_resolucion_suspension->cambiarEstado();
}        
?>

