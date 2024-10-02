<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_DESCUENTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_vendedor_descuento = VtaVendedorDescuento::getOxId($id);
    if($vta_vendedor_descuento->getEstado() == 1){
        $vta_vendedor_descuento->setEstado(0);
    }else{
        $vta_vendedor_descuento->setEstado(1);
    }
    $vta_vendedor_descuento->cambiarEstado();
}        
?>

