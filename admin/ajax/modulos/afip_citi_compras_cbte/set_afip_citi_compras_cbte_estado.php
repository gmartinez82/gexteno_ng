<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_CBTE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $afip_citi_compras_cbte = AfipCitiComprasCbte::getOxId($id);
    if($afip_citi_compras_cbte->getEstado() == 1){
        $afip_citi_compras_cbte->setEstado(0);
    }else{
        $afip_citi_compras_cbte->setEstado(1);
    }
    $afip_citi_compras_cbte->cambiarEstado();
}        
?>

