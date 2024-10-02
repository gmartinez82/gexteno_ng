<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ITEM_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $fnd_caja_movimiento_item = FndCajaMovimientoItem::getOxId($id);
    if($fnd_caja_movimiento_item->getEstado() == 1){
        $fnd_caja_movimiento_item->setEstado(0);
    }else{
        $fnd_caja_movimiento_item->setEstado(1);
    }
    $fnd_caja_movimiento_item->cambiarEstado();
}        
?>

