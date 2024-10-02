<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(SldTipoImagen::SES_CRITERIOS);

if($c == 'sld_tipo_imagen.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('sld_tipo_imagen');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('sld_tipo_imagen');	
	$criterio->delCriterio($c);
}
?>

