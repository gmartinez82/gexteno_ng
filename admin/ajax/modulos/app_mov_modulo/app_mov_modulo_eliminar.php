<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('APP_MOV_MODULO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $app_mov_modulo = new AppMovModulo();
    $app_mov_modulo->setId($id, false);
    $app_mov_modulo->deleteAll();
}    
?>

