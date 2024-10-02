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
if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ESTADO_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $prd_orden_trabajo_estado = PrdOrdenTrabajoEstado::setInicializarRegistroSimple();
    if($prd_orden_trabajo_estado){
        $arr['id'] = $prd_orden_trabajo_estado->getId();
        $arr['hash'] = $prd_orden_trabajo_estado->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

