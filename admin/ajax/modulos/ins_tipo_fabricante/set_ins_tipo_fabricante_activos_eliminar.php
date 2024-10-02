<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsTipoFabricante::SES_CRITERIOS);

if($c == 'ins_tipo_fabricante.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_tipo_fabricante');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_tipo_fabricante');	
	$criterio->delCriterio($c);
}
?>

