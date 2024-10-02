<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_OBSERVACION_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ws_fe_ope_solicitud_respuesta_observacion = new WsFeOpeSolicitudRespuestaObservacion();
    $ws_fe_ope_solicitud_respuesta_observacion->setId($id, false);
    $ws_fe_ope_solicitud_respuesta_observacion->deleteAll();
}    
?>

