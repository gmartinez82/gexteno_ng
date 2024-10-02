<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_VIDEO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $not_video = NotVideo::getOxId($id);
    if($not_video->getEstado() == 1){
        $not_video->setEstado(0);
    }else{
        $not_video->setEstado(1);
    }
    $not_video->cambiarEstado();
}        
?>

