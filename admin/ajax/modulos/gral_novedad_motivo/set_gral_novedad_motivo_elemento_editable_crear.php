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
if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MOTIVO_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $gral_novedad_motivo = GralNovedadMotivo::setInicializarRegistroSimple();
    if($gral_novedad_motivo){
        $arr['id'] = $gral_novedad_motivo->getId();
        $arr['hash'] = $gral_novedad_motivo->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

