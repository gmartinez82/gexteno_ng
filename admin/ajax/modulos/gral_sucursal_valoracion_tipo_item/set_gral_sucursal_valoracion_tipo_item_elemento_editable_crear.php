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
if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $gral_sucursal_valoracion_tipo_item = GralSucursalValoracionTipoItem::setInicializarRegistroSimple();
    if($gral_sucursal_valoracion_tipo_item){
        $arr['id'] = $gral_sucursal_valoracion_tipo_item->getId();
        $arr['hash'] = $gral_sucursal_valoracion_tipo_item->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

