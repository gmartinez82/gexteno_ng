<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ws_fe_ope_solicitud_comprobante_asociado = WsFeOpeSolicitudComprobanteAsociado::getOxId($id);
    if($ws_fe_ope_solicitud_comprobante_asociado->getEstado() == 1){
        $ws_fe_ope_solicitud_comprobante_asociado->setEstado(0);
    }else{
        $ws_fe_ope_solicitud_comprobante_asociado->setEstado(1);
    }
    $ws_fe_ope_solicitud_comprobante_asociado->cambiarEstado();
}        
?>

