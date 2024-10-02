<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante = PdeTipoNotaDebitoWsFeParamTipoComprobante::getOxId($id);
    if($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getEstado() == 1){
        $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setEstado(0);
    }else{
        $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setEstado(1);
    }
    $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->cambiarEstado();
}        
?>

