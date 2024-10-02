<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VTA_VENDEDOR_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_sucursal_vta_vendedor = GralSucursalVtaVendedor::getOxId($id);
    if($gral_sucursal_vta_vendedor->getEstado() == 1){
        $gral_sucursal_vta_vendedor->setEstado(0);
    }else{
        $gral_sucursal_vta_vendedor->setEstado(1);
    }
    $gral_sucursal_vta_vendedor->cambiarEstado();
}        
?>

