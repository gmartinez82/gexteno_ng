<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeFacturaPdeRecibo::SES_CRITERIOS);

if($c == 'pde_factura_pde_recibo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_factura_pde_recibo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_factura_pde_recibo');	
	$criterio->delCriterio($c);
}
?>

