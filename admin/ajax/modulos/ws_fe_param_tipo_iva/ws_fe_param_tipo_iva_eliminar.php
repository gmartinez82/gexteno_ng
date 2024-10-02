<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ws_fe_param_tipo_iva = new WsFeParamTipoIva();
    $ws_fe_param_tipo_iva->setId($id, false);
    $ws_fe_param_tipo_iva->deleteAll();
}    
?>

