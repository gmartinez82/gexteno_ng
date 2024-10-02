<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_VIDEO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $not_video = new NotVideo();
    $not_video->setId($id, false);
    $not_video->deleteAll();
}    
?>

