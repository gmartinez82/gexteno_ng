<?php

include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$ins_categoria = $ins_insumo->getInsCategoria();

$centro_pedido_id = Gral::getVars(2, 'centro_pedido_id', 0);
$pde_centro_pedido = PdeCentroPedido::getOxId($centro_pedido_id);

$proveedor_id = Gral::getVars(2, 'proveedor_id', 0);

$prv_rubro = PrvRubro::getOxCodigo($ins_categoria->getCodigo());
if (!$prv_rubro) {
    // si no existe el rubro, se crea uno con las caracteristicas de la categoria
    $prv_rubro = new PrvRubro();
    $prv_rubro->setDescripcion($ins_categoria->getDescripcion());
    $prv_rubro->setCodigo($ins_categoria->getCodigo());
    $prv_rubro->setEstado(1);
    $prv_rubro->save();
}

// se vincula proveedor con rubro del insumo
$array = array(
    array('campo' => 'prv_proveedor_id', 'valor' => $proveedor_id),
    array('campo' => 'prv_rubro_id', 'valor' => $prv_rubro->getId())
);
$prv_proveedor_prv_rubro = PrvProveedorPrvRubro::getOxArray($array);
if (!$prv_proveedor_prv_rubro) {
    // si no existe vinculo, se crea uno
    $prv_proveedor_prv_rubro = new PrvProveedorPrvRubro();
    $prv_proveedor_prv_rubro->setPrvProveedorId($proveedor_id);
    $prv_proveedor_prv_rubro->setPrvRubroId($prv_rubro->getId());
    $prv_proveedor_prv_rubro->save();
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