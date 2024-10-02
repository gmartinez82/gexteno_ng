<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_GRAL_SUCURSAL_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $gral_sucursal_valoracion_tipo_item_gral_sucursal = GralSucursalValoracionTipoItemGralSucursal::getOxId($id);
    if($gral_sucursal_valoracion_tipo_item_gral_sucursal){
        if($gral_sucursal_valoracion_tipo_item_gral_sucursal->getHash() == $hash){
            $gral_sucursal_valoracion_tipo_item_gral_sucursal->deleteAll();
        }
    }
}    
?>

