<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_GRAL_ESCENARIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_vendedor_gral_escenario = VtaVendedorGralEscenario::getOxId($id);
    if($vta_vendedor_gral_escenario->getEstado() == 1){
        $vta_vendedor_gral_escenario->setEstado(0);
    }else{
        $vta_vendedor_gral_escenario->setEstado(1);
    }
    $vta_vendedor_gral_escenario->cambiarEstado();
}        
?>

