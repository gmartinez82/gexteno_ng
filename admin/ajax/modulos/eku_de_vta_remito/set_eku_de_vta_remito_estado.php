<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_VTA_REMITO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_vta_remito = EkuDeVtaRemito::getOxId($id);
    if($eku_de_vta_remito->getEstado() == 1){
        $eku_de_vta_remito->setEstado(0);
    }else{
        $eku_de_vta_remito->setEstado(1);
    }
    $eku_de_vta_remito->cambiarEstado();
}        
?>

