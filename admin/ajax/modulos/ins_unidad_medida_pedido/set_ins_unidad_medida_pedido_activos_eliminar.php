<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsUnidadMedidaPedido::SES_CRITERIOS);

if($c == 'ins_unidad_medida_pedido.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_unidad_medida_pedido');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_unidad_medida_pedido');	
	$criterio->delCriterio($c);
}
?>

