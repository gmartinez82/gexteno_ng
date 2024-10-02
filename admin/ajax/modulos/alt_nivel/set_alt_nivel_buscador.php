<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AltNivel::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('alt_nivel.id', Gral::getVars(1, 'buscador_alt_nivel_id'), Gral::getVars(1, 'buscador_alt_nivel_id_comparador'));
	$criterio->add('alt_nivel.descripcion', Gral::getVars(1, 'buscador_alt_nivel_descripcion'), Gral::getVars(1, 'buscador_alt_nivel_descripcion_comparador'));
	$criterio->add('alt_nivel.codigo', Gral::getVars(1, 'buscador_alt_nivel_codigo'), Gral::getVars(1, 'buscador_alt_nivel_codigo_comparador'));
	$criterio->add('alt_nivel.observacion', Gral::getVars(1, 'buscador_alt_nivel_observacion'), Gral::getVars(1, 'buscador_alt_nivel_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('alt_alerta', 'alt_alerta.alt_nivel_id', 'alt_nivel.id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_modulo', 'alt_modulo.id', 'alt_alerta.alt_modulo_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_tipo', 'alt_tipo.id', 'alt_alerta.alt_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_origen', 'alt_origen.id', 'alt_alerta.alt_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_control', 'alt_control.id', 'alt_alerta.alt_control_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('alt_nivel');
		$criterio->setCriterios();		
}
?>

