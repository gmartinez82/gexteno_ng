<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaReciboImagen::SES_CRITERIOS);

if($c == 'vta_recibo_imagen.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_recibo_imagen');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_recibo_imagen');	
	$criterio->delCriterio($c);
}
?>

