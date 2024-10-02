<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ITEM_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $fnd_caja_movimiento_item = new FndCajaMovimientoItem();
    $fnd_caja_movimiento_item->setId($id, false);
    $fnd_caja_movimiento_item->deleteAll();
}    
?>

