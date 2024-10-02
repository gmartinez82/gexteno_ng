<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_DESTINO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ins_stock_transformacion_destino = new InsStockTransformacionDestino();
    $ins_stock_transformacion_destino->setId($id, false);
    $ins_stock_transformacion_destino->deleteAll();
}    
?>

