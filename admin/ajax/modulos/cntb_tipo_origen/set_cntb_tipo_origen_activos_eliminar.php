<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CntbTipoOrigen::SES_CRITERIOS);

if($c == 'cntb_tipo_origen.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cntb_tipo_origen');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cntb_tipo_origen');	
	$criterio->delCriterio($c);
}
?>

