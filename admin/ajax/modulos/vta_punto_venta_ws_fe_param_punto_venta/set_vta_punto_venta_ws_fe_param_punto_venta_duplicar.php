<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_WS_FE_PARAM_PUNTO_VENTA_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $vta_punto_venta_ws_fe_param_punto_venta = VtaPuntoVentaWsFeParamPuntoVenta::getOxId($id);
    $vta_punto_venta_ws_fe_param_punto_venta->duplicarVtaPuntoVentaWsFeParamPuntoVenta();
}    

