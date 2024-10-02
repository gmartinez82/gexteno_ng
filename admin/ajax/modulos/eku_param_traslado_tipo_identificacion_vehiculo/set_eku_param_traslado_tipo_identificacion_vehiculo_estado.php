<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_TRASLADO_TIPO_IDENTIFICACION_VEHICULO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_param_traslado_tipo_identificacion_vehiculo = EkuParamTrasladoTipoIdentificacionVehiculo::getOxId($id);
    if($eku_param_traslado_tipo_identificacion_vehiculo->getEstado() == 1){
        $eku_param_traslado_tipo_identificacion_vehiculo->setEstado(0);
    }else{
        $eku_param_traslado_tipo_identificacion_vehiculo->setEstado(1);
    }
    $eku_param_traslado_tipo_identificacion_vehiculo->cambiarEstado();
}        
?>

