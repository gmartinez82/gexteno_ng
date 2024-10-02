<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsAgrupador::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('us_agrupador.id', Gral::getVars(1, 'buscador_us_agrupador_id'), Gral::getVars(1, 'buscador_us_agrupador_id_comparador'));
	$criterio->add('us_agrupador.us_credencial_id', Gral::getVars(1, 'buscador_us_agrupador_us_credencial_id'), Gral::getVars(1, 'buscador_us_agrupador_us_credencial_id_comparador'));
	$criterio->add('us_agrupador.us_grupo_id', Gral::getVars(1, 'buscador_us_agrupador_us_grupo_id'), Gral::getVars(1, 'buscador_us_agrupador_us_grupo_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_agrupador');
		$criterio->setCriterios();		
}
?>

