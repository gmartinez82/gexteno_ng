<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_IMAGEN_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $os_orden_servicio_imagen = OsOrdenServicioImagen::getOxId($id);
    if($os_orden_servicio_imagen){
        if($os_orden_servicio_imagen->getHash() == $hash){
            $os_orden_servicio_imagen->deleteAll();
        }
    }
}    
?>

