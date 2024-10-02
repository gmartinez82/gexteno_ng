<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_vendedor_valoracion_tipo_item = VtaVendedorValoracionTipoItem::getOxId($id);
    if($vta_vendedor_valoracion_tipo_item->getEstado() == 1){
        $vta_vendedor_valoracion_tipo_item->setEstado(0);
    }else{
        $vta_vendedor_valoracion_tipo_item->setEstado(1);
    }
    $vta_vendedor_valoracion_tipo_item->cambiarEstado();
}        
?>

