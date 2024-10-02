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
if(UsCredencial::getEsAcreditado('EKU_PARAM_TRASLADO_TIPO_IDENTIFICACION_VEHICULO_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_param_traslado_tipo_identificacion_vehiculo = EkuParamTrasladoTipoIdentificacionVehiculo::setInicializarRegistroSimple();
    if($eku_param_traslado_tipo_identificacion_vehiculo){
        $arr['id'] = $eku_param_traslado_tipo_identificacion_vehiculo->getId();
        $arr['hash'] = $eku_param_traslado_tipo_identificacion_vehiculo->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

