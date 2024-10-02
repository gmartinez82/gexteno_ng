<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_RECIBO_WS_FE_OPE_SOLICITUD_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $vta_recibo_ws_fe_ope_solicitud = VtaReciboWsFeOpeSolicitud::getOxId($id);
    $vta_recibo_ws_fe_ope_solicitud->duplicarVtaReciboWsFeOpeSolicitud();
}    

