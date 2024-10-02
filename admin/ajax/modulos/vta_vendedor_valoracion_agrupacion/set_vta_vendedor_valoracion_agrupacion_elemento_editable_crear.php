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
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $vta_vendedor_valoracion_agrupacion = VtaVendedorValoracionAgrupacion::setInicializarRegistroSimple();
    if($vta_vendedor_valoracion_agrupacion){
        $arr['id'] = $vta_vendedor_valoracion_agrupacion->getId();
        $arr['hash'] = $vta_vendedor_valoracion_agrupacion->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

