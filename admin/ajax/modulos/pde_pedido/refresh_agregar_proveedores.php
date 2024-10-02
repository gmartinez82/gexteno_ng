<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$centro_pedido_id = Gral::getVars(2, 'centro_pedido_id', 0);
$pde_centro_pedido = PdeCentroPedido::getOxId($centro_pedido_id);

$buscador = Gral::getVars(2, 'buscador', '');

include "bloque_agregar_proveedores.php";
?>
