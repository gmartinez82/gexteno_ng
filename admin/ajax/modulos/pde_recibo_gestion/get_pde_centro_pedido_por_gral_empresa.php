<?php
include "_autoload.php";

$gral_empresa_id = Gral::getVars(Gral::VARS_GET, 'gral_empresa_id', null);
$pde_centro_pedidos = PdeCentroPedido::getPdeCentroPedidos();

$arr = array();

foreach($pde_centro_pedidos as $pde_centro_pedido){
	$arr_pde_centro_pedido = array(
		'id' => $pde_centro_pedido->getId(),
		'descripcion' => $pde_centro_pedido->getDescripcion(),
	);
	$arr[] = $arr_pde_centro_pedido;
}

$arr_json = json_encode($arr);
echo $arr_json;
?>