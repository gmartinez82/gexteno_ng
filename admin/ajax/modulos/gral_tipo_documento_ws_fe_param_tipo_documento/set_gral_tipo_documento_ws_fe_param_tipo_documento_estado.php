<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_tipo_documento_ws_fe_param_tipo_documento = GralTipoDocumentoWsFeParamTipoDocumento::getOxId($id);
    if($gral_tipo_documento_ws_fe_param_tipo_documento->getEstado() == 1){
        $gral_tipo_documento_ws_fe_param_tipo_documento->setEstado(0);
    }else{
        $gral_tipo_documento_ws_fe_param_tipo_documento->setEstado(1);
    }
    $gral_tipo_documento_ws_fe_param_tipo_documento->cambiarEstado();
}        
?>

