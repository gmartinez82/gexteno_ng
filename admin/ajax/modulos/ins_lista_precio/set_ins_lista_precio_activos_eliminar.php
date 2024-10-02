<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsListaPrecio::SES_CRITERIOS);

if($c == 'ins_lista_precio.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_lista_precio');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_lista_precio');	
	$criterio->delCriterio($c);
}
?>

