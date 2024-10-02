<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_nota_credito_ws_fe_ope_solicitud = VtaNotaCreditoWsFeOpeSolicitud::getOxId($id);
    if($vta_nota_credito_ws_fe_ope_solicitud->getEstado() == 1){
        $vta_nota_credito_ws_fe_ope_solicitud->setEstado(0);
    }else{
        $vta_nota_credito_ws_fe_ope_solicitud->setEstado(1);
    }
    $vta_nota_credito_ws_fe_ope_solicitud->cambiarEstado();
}        
?>

