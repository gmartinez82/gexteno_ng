<?php

include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$ins_categoria = $ins_insumo->getInsCategoria();

$centro_pedido_id = Gral::getVars(2, 'centro_pedido_id', 0);
$pde_centro_pedido = PdeCentroPedido::getOxId($centro_pedido_id);

$proveedor_id = Gral::getVars(2, 'proveedor_id', 0);

// se vincula proveedor con rubro del insumo
$array = array(
    array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo->getId()),
    array('campo' => 'prv_proveedor_id', 'valor' => $proveedor_id),
);
$ins_insumo_prv_proveedor = InsInsumoPrvProveedor::getOxArray($array);
if (!$ins_insumo_prv_proveedor) {
    // si no existe vinculo, se crea uno
    $ins_insumo_prv_proveedor = new InsInsumoPrvProveedor();
    $ins_insumo_prv_proveedor->setInsInsumoId($ins_insumo->getId());
    $ins_insumo_prv_proveedor->setPrvProveedorId($proveedor_id);
    $ins_insumo_prv_proveedor->save();
}

// se vincula centro de pedido con proveedor
$array = array(
    array('campo' => 'pde_centro_pedido_id', 'valor' => $centro_pedido_id),
    array('campo' => 'prv_proveedor_id', 'valor' => $proveedor_id),
);
$pde_centro_pedido_prv_proveedor = PdeCentroPedidoPrvProveedor::getOxArray($array);
if (!$pde_centro_pedido_prv_proveedor) {
    // si no existe vinculo, se crea uno
    $pde_centro_pedido_prv_proveedor = new PdeCentroPedidoPrvProveedor();
    $pde_centro_pedido_prv_proveedor->setPdeCentroPedidoId($centro_pedido_id);
    $pde_centro_pedido_prv_proveedor->setPrvProveedorId($proveedor_id);
    $pde_centro_pedido_prv_proveedor->save();
}

?>