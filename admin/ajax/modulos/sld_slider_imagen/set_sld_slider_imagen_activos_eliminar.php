<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(SldSliderImagen::SES_CRITERIOS);

if($c == 'sld_slider_imagen.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('sld_slider_imagen');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('sld_slider_imagen');	
	$criterio->delCriterio($c);
}
?>

