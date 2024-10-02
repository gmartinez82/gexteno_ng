<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_TRASLADO_TIPO_IDENTIFICACION_VEHICULO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_param_traslado_tipo_identificacion_vehiculo = EkuParamTrasladoTipoIdentificacionVehiculo::getOxId($id);
    if($eku_param_traslado_tipo_identificacion_vehiculo){
        if($eku_param_traslado_tipo_identificacion_vehiculo->getHash() == $hash){
            $eku_param_traslado_tipo_identificacion_vehiculo->deleteAll();
        }
    }
}    
?>

