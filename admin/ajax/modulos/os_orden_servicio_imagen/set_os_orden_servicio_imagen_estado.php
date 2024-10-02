<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_IMAGEN_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $os_orden_servicio_imagen = OsOrdenServicioImagen::getOxId($id);
    if($os_orden_servicio_imagen->getEstado() == 1){
        $os_orden_servicio_imagen->setEstado(0);
    }else{
        $os_orden_servicio_imagen->setEstado(1);
    }
    $os_orden_servicio_imagen->cambiarEstado();
}        
?>

