<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PlnTurnoNovedad::SES_CRITERIOS);

if($c == 'pln_turno_novedad.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pln_turno_novedad');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pln_turno_novedad');	
	$criterio->delCriterio($c);
}
?>

