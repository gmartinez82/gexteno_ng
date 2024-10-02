<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_TRIBUTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_nota_credito_vta_tributo = VtaNotaCreditoVtaTributo::getOxId($id);
    if($vta_nota_credito_vta_tributo->getEstado() == 1){
        $vta_nota_credito_vta_tributo->setEstado(0);
    }else{
        $vta_nota_credito_vta_tributo->setEstado(1);
    }
    $vta_nota_credito_vta_tributo->cambiarEstado();
}        
?>

