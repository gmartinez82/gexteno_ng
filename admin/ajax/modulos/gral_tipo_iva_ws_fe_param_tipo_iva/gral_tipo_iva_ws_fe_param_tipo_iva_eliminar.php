<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_tipo_iva_ws_fe_param_tipo_iva = new GralTipoIvaWsFeParamTipoIva();
    $gral_tipo_iva_ws_fe_param_tipo_iva->setId($id, false);
    $gral_tipo_iva_ws_fe_param_tipo_iva->deleteAll();
}    
?>

