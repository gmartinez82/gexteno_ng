<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CntbTipoSaldo::SES_CRITERIOS);

if($c == 'cntb_tipo_saldo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cntb_tipo_saldo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cntb_tipo_saldo');	
	$criterio->delCriterio($c);
}
?>

