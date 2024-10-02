<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_VEHICULO_TIPO_COMBUSTIBLE_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_param_vehiculo_tipo_combustible = EkuParamVehiculoTipoCombustible::getOxId($id);
    if($eku_param_vehiculo_tipo_combustible){
        if($eku_param_vehiculo_tipo_combustible->getHash() == $hash){
            $eku_param_vehiculo_tipo_combustible->deleteAll();
        }
    }
}    
?>

