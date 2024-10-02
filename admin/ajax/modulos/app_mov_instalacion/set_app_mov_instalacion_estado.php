<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('APP_MOV_INSTALACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $app_mov_instalacion = AppMovInstalacion::getOxId($id);
    if($app_mov_instalacion->getEstado() == 1){
        $app_mov_instalacion->setEstado(0);
    }else{
        $app_mov_instalacion->setEstado(1);
    }
    $app_mov_instalacion->cambiarEstado();
}        
?>

