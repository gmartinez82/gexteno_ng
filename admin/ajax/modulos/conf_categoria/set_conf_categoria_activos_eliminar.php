<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(ConfCategoria::SES_CRITERIOS);

if($c == 'conf_categoria.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('conf_categoria');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('conf_categoria');	
	$criterio->delCriterio($c);
}
?>

