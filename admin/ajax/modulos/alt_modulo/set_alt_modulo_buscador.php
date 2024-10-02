<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AltModulo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('alt_modulo.id', Gral::getVars(1, 'buscador_alt_modulo_id'), Gral::getVars(1, 'buscador_alt_modulo_id_comparador'));
	$criterio->add('alt_modulo.descripcion', Gral::getVars(1, 'buscador_alt_modulo_descripcion'), Gral::getVars(1, 'buscador_alt_modulo_descripcion_comparador'));
	$criterio->add('alt_modulo.codigo', Gral::getVars(1, 'buscador_alt_modulo_codigo'), Gral::getVars(1, 'buscador_alt_modulo_codigo_comparador'));
	$criterio->add('alt_modulo.observacion', Gral::getVars(1, 'buscador_alt_modulo_observacion'), Gral::getVars(1, 'buscador_alt_modulo_observacion_comparador'));
	$criterio->add('alt_modulo.clase', Gral::getVars(1, 'buscador_alt_modulo_clase'), Gral::getVars(1, 'buscador_alt_modulo_clase_comparador'));
	$criterio->add('alt_modulo.tabla', Gral::getVars(1, 'buscador_alt_modulo_tabla'), Gral::getVars(1, 'buscador_alt_modulo_tabla_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('alt_alerta', 'alt_alerta.alt_modulo_id', 'alt_modulo.id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_tipo', 'alt_tipo.id', 'alt_alerta.alt_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_nivel', 'alt_nivel.id', 'alt_alerta.alt_nivel_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_origen', 'alt_origen.id', 'alt_alerta.alt_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_control', 'alt_control.id', 'alt_alerta.alt_control_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('alt_modulo');
		$criterio->setCriterios();		
}
?>

