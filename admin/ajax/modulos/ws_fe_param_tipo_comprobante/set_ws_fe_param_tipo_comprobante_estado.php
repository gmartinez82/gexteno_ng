<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ws_fe_param_tipo_comprobante = WsFeParamTipoComprobante::getOxId($id);
    if($ws_fe_param_tipo_comprobante->getEstado() == 1){
        $ws_fe_param_tipo_comprobante->setEstado(0);
    }else{
        $ws_fe_param_tipo_comprobante->setEstado(1);
    }
    $ws_fe_param_tipo_comprobante->cambiarEstado();
}        
?>

