<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_MONEDA_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $ws_fe_param_tipo_moneda = WsFeParamTipoMoneda::getOxId($id);
    $ws_fe_param_tipo_moneda->duplicarWsFeParamTipoMoneda();
}    

