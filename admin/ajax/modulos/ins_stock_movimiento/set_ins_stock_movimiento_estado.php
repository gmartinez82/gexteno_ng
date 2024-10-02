<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_STOCK_MOVIMIENTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_stock_movimiento = InsStockMovimiento::getOxId($id);
    if($ins_stock_movimiento->getEstado() == 1){
        $ins_stock_movimiento->setEstado(0);
    }else{
        $ins_stock_movimiento->setEstado(1);
    }
    $ins_stock_movimiento->cambiarEstado();
}        
?>

