<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se realizan los controles de datos
// -----------------------------------------------------------------------------
$arr['error'] = false;

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_CIUDAD_GEO_LOCALIDAD_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_param_geo_ciudad_geo_localidad = EkuParamGeoCiudadGeoLocalidad::setInicializarRegistroSimple();
    if($eku_param_geo_ciudad_geo_localidad){
        $arr['id'] = $eku_param_geo_ciudad_geo_localidad->getId();
        $arr['hash'] = $eku_param_geo_ciudad_geo_localidad->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

