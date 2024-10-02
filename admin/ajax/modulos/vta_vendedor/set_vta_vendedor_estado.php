<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_vendedor = VtaVendedor::getOxId($id);
    if($vta_vendedor->getEstado() == 1){
        $vta_vendedor->setEstado(0);
    }else{
        $vta_vendedor->setEstado(1);
    }
    $vta_vendedor->cambiarEstado();
}        
?>

