<?php
include "_autoload.php";

$id = Gral::getVars(2, 'stock_resumen_id', 0);
$ins_stock_resumen = InsStockResumen::getOxId($id);
$ins_insumo = $ins_stock_resumen->getInsInsumo();
$ins_categoria = $ins_insumo->getInsCategoria();
$pan_panol = $ins_stock_resumen->getPanPanol();
$pde_centro_pedido = $pan_panol->getPdeCentroPedido();

$ins_insumo_costos = $ins_insumo->getInsInsumoCostosEvolucion($pde_centro_pedido);
//Gral::prr($ins_insumo_costos); exit;

include "bloque_insumo_costos.php";
?>