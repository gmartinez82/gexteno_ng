<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_STOCK_TIPO_MOVIMIENTO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ins_stock_tipo_movimiento = new InsStockTipoMovimiento();
    $ins_stock_tipo_movimiento->setId($id, false);
    $ins_stock_tipo_movimiento->deleteAll();
}    
?>

