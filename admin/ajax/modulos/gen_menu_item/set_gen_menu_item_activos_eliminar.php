<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GenMenuItem::SES_CRITERIOS);

if($c == 'gen_menu_item.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gen_menu_item');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gen_menu_item');	
	$criterio->delCriterio($c);
}
?>

