<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $ws_fe_ope_solicitud_respuesta = WsFeOpeSolicitudRespuesta::getOxId($id);
    $ws_fe_ope_solicitud_respuesta->duplicarWsFeOpeSolicitudRespuesta();
}    

