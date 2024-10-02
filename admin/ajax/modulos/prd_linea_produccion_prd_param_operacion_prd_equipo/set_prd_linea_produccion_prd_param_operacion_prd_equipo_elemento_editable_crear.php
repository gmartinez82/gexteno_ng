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
if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $prd_linea_produccion_prd_param_operacion_prd_equipo = PrdLineaProduccionPrdParamOperacionPrdEquipo::setInicializarRegistroSimple();
    if($prd_linea_produccion_prd_param_operacion_prd_equipo){
        $arr['id'] = $prd_linea_produccion_prd_param_operacion_prd_equipo->getId();
        $arr['hash'] = $prd_linea_produccion_prd_param_operacion_prd_equipo->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

