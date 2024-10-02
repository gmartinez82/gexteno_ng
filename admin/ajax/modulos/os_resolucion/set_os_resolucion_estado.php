<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OS_RESOLUCION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $os_resolucion = OsResolucion::getOxId($id);
    if($os_resolucion->getEstado() == 1){
        $os_resolucion->setEstado(0);
    }else{
        $os_resolucion->setEstado(1);
    }
    $os_resolucion->cambiarEstado();
}        
?>

