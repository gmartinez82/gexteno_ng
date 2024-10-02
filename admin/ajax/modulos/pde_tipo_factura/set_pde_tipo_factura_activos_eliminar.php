<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeTipoFactura::SES_CRITERIOS);

if($c == 'pde_tipo_factura.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_tipo_factura');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_tipo_factura');	
	$criterio->delCriterio($c);
}
?>

