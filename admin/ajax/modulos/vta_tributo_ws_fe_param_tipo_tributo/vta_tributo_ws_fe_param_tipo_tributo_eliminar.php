<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_tributo_ws_fe_param_tipo_tributo = new VtaTributoWsFeParamTipoTributo();
    $vta_tributo_ws_fe_param_tipo_tributo->setId($id, false);
    $vta_tributo_ws_fe_param_tipo_tributo->deleteAll();
}    
?>

