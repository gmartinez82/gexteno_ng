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
if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $prd_orden_trabajo_operacion_ope_operario = PrdOrdenTrabajoOperacionOpeOperario::setInicializarRegistroSimple();
    if($prd_orden_trabajo_operacion_ope_operario){
        $arr['id'] = $prd_orden_trabajo_operacion_ope_operario->getId();
        $arr['hash'] = $prd_orden_trabajo_operacion_ope_operario->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

