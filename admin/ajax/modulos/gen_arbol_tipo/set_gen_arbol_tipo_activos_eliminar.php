<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GenArbolTipo::SES_CRITERIOS);

if($c == 'gen_arbol_tipo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gen_arbol_tipo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gen_arbol_tipo');	
	$criterio->delCriterio($c);
}
?>

