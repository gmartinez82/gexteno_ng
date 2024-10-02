<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_MENSAJE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $us_mensaje = UsMensaje::getOxId($id);
    if($us_mensaje->getEstado() == 1){
        $us_mensaje->setEstado(0);
    }else{
        $us_mensaje->setEstado(1);
    }
    $us_mensaje->cambiarEstado();
}        
?>

