<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);

if($c == 'fnd_chq_cheque.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('fnd_chq_cheque');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('fnd_chq_cheque');	
	$criterio->delCriterio($c);
}
?>

