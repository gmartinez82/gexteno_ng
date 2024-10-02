<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeVtaRemito::SES_CRITERIOS);

if($c == 'eku_de_vta_remito.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_vta_remito');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_vta_remito');	
	$criterio->delCriterio($c);
}
?>

