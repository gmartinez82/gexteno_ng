<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $vta_vendedor_valoracion_tipo_item = VtaVendedorValoracionTipoItem::getOxId($id);
    if($vta_vendedor_valoracion_tipo_item){
        if($vta_vendedor_valoracion_tipo_item->getHash() == $hash){
            $vta_vendedor_valoracion_tipo_item->deleteAll();
        }
    }
}    
?>

