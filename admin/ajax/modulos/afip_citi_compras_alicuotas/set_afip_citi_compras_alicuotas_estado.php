<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $afip_citi_compras_alicuotas = AfipCitiComprasAlicuotas::getOxId($id);
    if($afip_citi_compras_alicuotas->getEstado() == 1){
        $afip_citi_compras_alicuotas->setEstado(0);
    }else{
        $afip_citi_compras_alicuotas->setEstado(1);
    }
    $afip_citi_compras_alicuotas->cambiarEstado();
}        
?>

