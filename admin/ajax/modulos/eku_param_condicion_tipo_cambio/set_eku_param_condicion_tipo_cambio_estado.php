<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_CONDICION_TIPO_CAMBIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_param_condicion_tipo_cambio = EkuParamCondicionTipoCambio::getOxId($id);
    if($eku_param_condicion_tipo_cambio->getEstado() == 1){
        $eku_param_condicion_tipo_cambio->setEstado(0);
    }else{
        $eku_param_condicion_tipo_cambio->setEstado(1);
    }
    $eku_param_condicion_tipo_cambio->cambiarEstado();
}        
?>

