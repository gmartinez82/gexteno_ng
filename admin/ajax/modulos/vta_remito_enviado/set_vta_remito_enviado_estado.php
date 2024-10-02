<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_REMITO_ENVIADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_remito_enviado = VtaRemitoEnviado::getOxId($id);
    if($vta_remito_enviado->getEstado() == 1){
        $vta_remito_enviado->setEstado(0);
    }else{
        $vta_remito_enviado->setEstado(1);
    }
    $vta_remito_enviado->cambiarEstado();
}        
?>

