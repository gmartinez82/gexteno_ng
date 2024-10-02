<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_AGRUPACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_sucursal_valoracion_agrupacion = GralSucursalValoracionAgrupacion::getOxId($id);
    if($gral_sucursal_valoracion_agrupacion->getEstado() == 1){
        $gral_sucursal_valoracion_agrupacion->setEstado(0);
    }else{
        $gral_sucursal_valoracion_agrupacion->setEstado(1);
    }
    $gral_sucursal_valoracion_agrupacion->cambiarEstado();
}        
?>

