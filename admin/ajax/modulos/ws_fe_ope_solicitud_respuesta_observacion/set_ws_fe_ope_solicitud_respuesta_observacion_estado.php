<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_OBSERVACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ws_fe_ope_solicitud_respuesta_observacion = WsFeOpeSolicitudRespuestaObservacion::getOxId($id);
    if($ws_fe_ope_solicitud_respuesta_observacion->getEstado() == 1){
        $ws_fe_ope_solicitud_respuesta_observacion->setEstado(0);
    }else{
        $ws_fe_ope_solicitud_respuesta_observacion->setEstado(1);
    }
    $ws_fe_ope_solicitud_respuesta_observacion->cambiarEstado();
}        
?>

