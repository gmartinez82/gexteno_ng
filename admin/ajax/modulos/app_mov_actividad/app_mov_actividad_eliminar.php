<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('APP_MOV_ACTIVIDAD_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $app_mov_actividad = new AppMovActividad();
    $app_mov_actividad->setId($id, false);
    $app_mov_actividad->deleteAll();
}    
?>

