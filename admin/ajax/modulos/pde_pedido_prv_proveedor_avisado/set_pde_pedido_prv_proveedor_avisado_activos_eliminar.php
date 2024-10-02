<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdePedidoPrvProveedorAvisado::SES_CRITERIOS);

if($c == 'pde_pedido_prv_proveedor_avisado.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_pedido_prv_proveedor_avisado');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_pedido_prv_proveedor_avisado');	
	$criterio->delCriterio($c);
}
?>

