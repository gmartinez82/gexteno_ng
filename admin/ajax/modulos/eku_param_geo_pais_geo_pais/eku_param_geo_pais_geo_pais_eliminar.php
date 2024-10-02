<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_param_geo_pais_geo_pais = EkuParamGeoPaisGeoPais::getOxId($id);
    if($eku_param_geo_pais_geo_pais){
        if($eku_param_geo_pais_geo_pais->getHash() == $hash){
            $eku_param_geo_pais_geo_pais->deleteAll();
        }
    }
}    
?>

