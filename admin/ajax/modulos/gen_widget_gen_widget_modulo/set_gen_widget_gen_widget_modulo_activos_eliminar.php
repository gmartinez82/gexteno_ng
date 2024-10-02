<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GenWidgetGenWidgetModulo::SES_CRITERIOS);

if($c == 'gen_widget_gen_widget_modulo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gen_widget_gen_widget_modulo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gen_widget_gen_widget_modulo');	
	$criterio->delCriterio($c);
}
?>

