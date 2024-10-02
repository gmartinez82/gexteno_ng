<?php
include "_autoload.php";

$ins_stock_resumen_id = Gral::getVars(Gral::VARS_POST, 'ins_stock_resumen_id', 0, Gral::TIPO_INTEGER);
$cantidad = Gral::getVars(Gral::VARS_POST, 'cantidad', 0, Gral::TIPO_INTEGER);

$ins_stock_resumen = InsStockResumen::getOxId($ins_stock_resumen_id);
if($ins_stock_resumen){
    $observacion = 'Ajuste de Stock desde Gestion de Insumos';
    $ins_stock_movimiento = InsStockMovimiento::setRegistrarAjusteCalculado($ins_stock_resumen->getInsInsumoId(), $ins_stock_resumen->getPanPanolId(), $cantidad, $observacion);
}