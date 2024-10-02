<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_TIPO_VIDEO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $not_tipo_video = NotTipoVideo::getOxId($id);
    if($not_tipo_video->getEstado() == 1){
        $not_tipo_video->setEstado(0);
    }else{
        $not_tipo_video->setEstado(1);
    }
    $not_tipo_video->cambiarEstado();
}        
?>

