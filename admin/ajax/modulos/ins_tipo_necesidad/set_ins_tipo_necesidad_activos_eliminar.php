<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsTipoNecesidad::SES_CRITERIOS);

if($c == 'ins_tipo_necesidad.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_tipo_necesidad');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_tipo_necesidad');	
	$criterio->delCriterio($c);
}
?>

