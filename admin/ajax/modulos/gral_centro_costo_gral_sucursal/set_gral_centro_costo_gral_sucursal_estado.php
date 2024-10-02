<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_GRAL_SUCURSAL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_centro_costo_gral_sucursal = GralCentroCostoGralSucursal::getOxId($id);
    if($gral_centro_costo_gral_sucursal->getEstado() == 1){
        $gral_centro_costo_gral_sucursal->setEstado(0);
    }else{
        $gral_centro_costo_gral_sucursal->setEstado(1);
    }
    $gral_centro_costo_gral_sucursal->cambiarEstado();
}        
?>

