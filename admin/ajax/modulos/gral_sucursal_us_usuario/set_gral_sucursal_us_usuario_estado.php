<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_US_USUARIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_sucursal_us_usuario = GralSucursalUsUsuario::getOxId($id);
    if($gral_sucursal_us_usuario->getEstado() == 1){
        $gral_sucursal_us_usuario->setEstado(0);
    }else{
        $gral_sucursal_us_usuario->setEstado(1);
    }
    $gral_sucursal_us_usuario->cambiarEstado();
}        
?>

