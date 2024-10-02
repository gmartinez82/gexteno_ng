<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(XmlLenguajeCodigo::SES_CRITERIOS);

if($c == 'xml_lenguaje_codigo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('xml_lenguaje_codigo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('xml_lenguaje_codigo');	
	$criterio->delCriterio($c);
}
?>

