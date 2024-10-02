<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeFacturaItem::SES_CRITERIOS);

if($c == 'pde_factura_item.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_factura_item');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_factura_item');	
	$criterio->delCriterio($c);
}
?>

