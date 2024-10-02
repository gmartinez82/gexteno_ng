<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_WS_FE_PARAM_TIPO_DOCUMENTO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_tipo_documento_ws_fe_param_tipo_documento = new GralTipoDocumentoWsFeParamTipoDocumento();
    $gral_tipo_documento_ws_fe_param_tipo_documento->setId($id, false);
    $gral_tipo_documento_ws_fe_param_tipo_documento->deleteAll();
}    
?>

