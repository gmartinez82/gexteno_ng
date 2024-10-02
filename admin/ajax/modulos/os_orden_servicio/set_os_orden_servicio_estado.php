<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $os_orden_servicio = OsOrdenServicio::getOxId($id);
    if($os_orden_servicio->getEstado() == 1){
        $os_orden_servicio->setEstado(0);
    }else{
        $os_orden_servicio->setEstado(1);
    }
    $os_orden_servicio->cambiarEstado();
}        
?>

