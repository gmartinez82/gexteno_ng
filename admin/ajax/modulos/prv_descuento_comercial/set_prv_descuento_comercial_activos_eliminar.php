<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrvDescuentoComercial::SES_CRITERIOS);

if($c == 'prv_descuento_comercial.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prv_descuento_comercial');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prv_descuento_comercial');	
	$criterio->delCriterio($c);
}
?>

