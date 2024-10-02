<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_tipo_factura_ws_fe_param_tipo_comprobante = VtaTipoFacturaWsFeParamTipoComprobante::getOxId($id);
    if($vta_tipo_factura_ws_fe_param_tipo_comprobante->getEstado() == 1){
        $vta_tipo_factura_ws_fe_param_tipo_comprobante->setEstado(0);
    }else{
        $vta_tipo_factura_ws_fe_param_tipo_comprobante->setEstado(1);
    }
    $vta_tipo_factura_ws_fe_param_tipo_comprobante->cambiarEstado();
}        
?>

