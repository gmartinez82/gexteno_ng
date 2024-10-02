<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsStockTransformacion::SES_CRITERIOS);

if($c == 'ins_stock_transformacion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_stock_transformacion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_stock_transformacion');	
	$criterio->delCriterio($c);
}
?>

